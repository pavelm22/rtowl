<template>
  <div class="relative w-full h-screen z-[-1]">
    <canvas ref="sceneCanvas" class="w-full h-screen"></canvas>
  </div>
</template>

<script setup>
import {ref, onMounted, onBeforeUnmount} from 'vue'
import * as THREE from 'three'
import {OrbitControls} from 'three/examples/jsm/controls/OrbitControls'
import {GLTFLoader} from 'three/examples/jsm/loaders/GLTFLoader'
import {DRACOLoader} from 'three/examples/jsm/loaders/DRACOLoader'
import gsap from 'gsap'

const sceneCanvas = ref(null)
let scene, camera, renderer, orbitControls, animationFrameId
let model
let resizeTimeout

const emit = defineEmits(['update:progress'])
const props = defineProps({
  progress: {
    type: Number,
    default: 0
  },
})
const isLoading = ref(true)

// Kamerapositionen definieren
const cameraPositions = [
  {position: {x: 2, y: 0.5, z: -2}, rotation: {x: -2, y: 0.5, z: 2}},
  {position: {x: 3, y: 0.7, z: 0}, rotation: {x: -2, y: 0, z: 0}},
  {position: {x: 2, y: 0.5, z: 2}, rotation: {x: -2, y: -0.5, z: -2}},
  {position: {x: -2, y: 0.5, z: 2}, rotation: {x: 2, y: -0.5, z: -2}},
  {position: {x: -2, y: 0.5, z: -2}, rotation: {x: 2, y: 0.5, z: 2}},
  {position: {x: 2, y: 0.5, z: -2}, rotation: {x: -2, y: 0.5, z: 2}}
]

const presentationPositions = [
  // Frontansicht
  {position: {x: 2, y: 0.5, z: -2}, rotation: {x: -2, y: 0.5, z: 2}, duration: 2},
  // Zoom auf Kühlergrill
  {position: {x: 0, y: 0.3, z: -1}, rotation: {x: 0, y: 0, z: 0}, duration: 1.5},
  // Seitenansicht mit Felgen
  {position: {x: 3, y: 0.3, z: 0}, rotation: {x: 0, y: 0, z: 0}, duration: 2},
  // Heckansicht
  {position: {x: 0, y: 0.5, z: 2}, rotation: {x: 0, y: Math.PI, z: 0}, duration: 2},
  // Zurück zur Ausgangsposition
  {position: {x: 2, y: 0.5, z: -2}, rotation: {x: -2, y: 0.5, z: 2}, duration: 2}
]

function updateLoadingProgress(textureProgress, modelProgress) {
  // Gewichtung: Texture 30%, Model 70%
  const newProgress = (textureProgress * 0.3) + (modelProgress * 0.7)
  emit('update:progress', newProgress)
}

// Funktion zum Anpassen der Kamera basierend auf Bildschirmgröße
const adjustCameraForScreenSize = () => {
  if (!sceneCanvas.value || !renderer || !camera) return

  // Get actual canvas container dimensions
  const container = sceneCanvas.value.parentElement
  const width = container.clientWidth
  const height = container.clientHeight
  const aspect = width / height

  // Update canvas size with actual dimensions
  sceneCanvas.value.width = width * window.devicePixelRatio
  sceneCanvas.value.height = height * window.devicePixelRatio
  sceneCanvas.value.style.width = `${width}px`
  sceneCanvas.value.style.height = `${height}px`

  // Update camera
  camera.aspect = aspect
  camera.fov = width < 768 ? 60 : 45
  camera.updateProjectionMatrix()

  // Update renderer
  renderer.setSize(width, height, false)
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))

  // Adjust model position if loaded
  if (model) {
    const box = new THREE.Box3().setFromObject(model)
    const size = box.getSize(new THREE.Vector3())
    const center = box.getCenter(new THREE.Vector3())

    const currentY = model.position.y
    model.position.set(-center.x, currentY, -center.z)

    const distance = Math.max(size.x, size.z) * 2
    camera.position.set(distance, distance * 0.5, distance)
    camera.lookAt(0, size.y * 0.5, 0)
  }

  // Force a render
  renderer.render(scene, camera)
}

// Definiere handleResize außerhalb von onMounted
const handleResize = () => {
  if (!sceneCanvas) return
  adjustCameraForScreenSize()
}

let orbitAnimation
let isAnimating = true

function createSmoothOrbitAnimation() {
  const baseRadius = 4
  const baseHeight = 1
  const duration = 10

  // Animation erstellen
  orbitAnimation = gsap.timeline({
    repeat: -1,
    ease: "none"
  })

  orbitAnimation.to(camera.position, {
    duration: duration,
    onUpdate: function () {
      const progress = this.progress()
      const angle = progress * Math.PI * 2

      camera.position.x = Math.cos(angle) * baseRadius
      camera.position.z = Math.sin(angle) * baseRadius
      camera.position.y = baseHeight + Math.sin(progress * Math.PI * 2) * 0.2

      camera.lookAt(0, 0, 0)
    }
  })

  return orbitAnimation
}

const toggleOrbitMode = () => {
  if (isAnimating) {
    orbitAnimation.pause()
    orbitControls.enabled = true
  } else {
    orbitControls.enabled = false
    orbitAnimation.play()
  }
  isAnimating = !isAnimating
}

defineExpose({toggleOrbitMode})

onMounted(() => {

  let textureLoadProgress = 0
  let modelLoadProgress = 0
  renderer = new THREE.WebGLRenderer({
    antialias: true,
    canvas: sceneCanvas.value
  })
  renderer.setSize(window.innerWidth, window.innerHeight)
  renderer.setClearColor(0x000000)
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
  renderer.outputEncoding = THREE.LinearSRGBColorSpace
  renderer.shadowMap.enabled = true
  renderer.shadowMap.type = THREE.PCFSoftShadowMap

  // Szene und Kamera Setup
  scene = new THREE.Scene()
  camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000)
  camera.position.set(2, 0.5, 2)

  // OrbitControls Setup mit angepassten Grenzen
  orbitControls = new OrbitControls(camera, renderer.domElement)
  orbitControls.enableDamping = true
  orbitControls.enablePan = false
  orbitControls.maxDistance = window.innerWidth < 768 ? 15 : 10
  orbitControls.minDistance = window.innerWidth < 768 ? 7 : 5
  orbitControls.minPolarAngle = 0.5
  orbitControls.maxPolarAngle = 1.5
  orbitControls.enabled = false // Initial deaktiviert

  window.addEventListener('keydown', (event) => {
    if (event.key === ' ') { // Leertaste
      toggleOrbitMode()
    }
  })

  // Ground Setup
  const groundGeometry = new THREE.PlaneGeometry(100, 100, 32, 32)
  groundGeometry.rotateX(-Math.PI / 2)
  const groundMaterial = new THREE.MeshStandardMaterial({
    color: 0x555555,
    side: THREE.DoubleSide
  })
  const groundMesh = new THREE.Mesh(groundGeometry, groundMaterial)
  groundMesh.receiveShadow = true
  scene.add(groundMesh)

  // Lighting Setup mit angepasster Intensität
  const spotLight = new THREE.SpotLight(0xffffff, 2000, 100, 0.2, 0.5);
  spotLight.position.set(0, 25, 0);
  spotLight.castShadow = true;
  scene.add(spotLight);

  // Texture and Model Loading
  const textureLoader = new THREE.TextureLoader();
  const modelLoader = new GLTFLoader();
  const dracoLoader = new DRACOLoader();
  dracoLoader.setDecoderPath('https://www.gstatic.com/draco/versioned/decoders/1.5.6/');
  modelLoader.setDRACOLoader(dracoLoader);

  let texture = null;
  let model = null;

  function checkAndAddModel() {
    if (model) {  // Prüft nur, ob das Modell geladen wurde
      model.traverse(object => {
        if (object.isMesh) {
          object.castShadow = true;
          if (texture) {  // Falls Textur vorhanden ist, setze sie
            object.material.map = texture;
            object.material.needsUpdate = true;
          }
        }
      });

      // Modell korrekt positionieren
      model.rotation.set(-Math.PI / 2, 0, 0);
      model.position.set(0, 0, 0);

      // Bounding Box berechnen und Modell anpassen
      const bbox = new THREE.Box3().setFromObject(model);
      model.position.y = Math.abs(bbox.min.y);

      scene.add(model);
      adjustCameraForScreenSize();
      isLoading.value = false;
    }
  }

  function loadTexture(texturePath) {
    textureLoader.load(
        texturePath,
        (loadedTexture) => {
          texture = loadedTexture;
          updateLoadingProgress(100, model ? 100 : 0);
          checkAndAddModel();
        },
        undefined,
        (error) => {
          console.error('Fehler beim Laden der Textur:', error);
        }
    );
  }

  function loadModel(modelPath) {
    modelLoader.load(
        modelPath,
        (gltf) => {
          model = gltf.scene;
          updateLoadingProgress(texture ? 100 : 0, 100);
          checkAndAddModel();
        },
        (xhr) => {
          updateLoadingProgress(texture ? 100 : 0, (xhr.loaded / xhr.total) * 100);
        },
        (error) => {
          console.error('Fehler beim Laden des GLTF-Modells:', error);
          isLoading.value = false;
        }
    );
  }

  //loadTexture('_static/models/bmw_m4_csl_2023/textures/M4xNME_Badge_baseColor.png');
  loadModel('_static/models/owl-models/test.gltf');
  // Aufruf nach dem Laden des Modells
  createSmoothOrbitAnimation()

  // Animation Loop
  function animate() {
    animationFrameId = requestAnimationFrame(animate)
    renderer.render(scene, camera)
    if (orbitControls.enabled) {
      orbitControls.update()
    }
  }

  animate()

  // Verbesserter Resize Handler
  const handleResize = () => {
    if (!sceneCanvas.value) return

    adjustCameraForScreenSize()

    // Force a single render after resize
    renderer.render(scene, camera)
  }

  window.addEventListener('resize', () => {
    if (resizeTimeout) {
      clearTimeout(resizeTimeout)
    }
    resizeTimeout = setTimeout(handleResize, 250)
  })

  // Initiale Anpassung
  handleResize()
})

// Cleanup
onBeforeUnmount(() => {
  if (animationFrameId) {
    cancelAnimationFrame(animationFrameId)
  }
  if (orbitAnimation) {
    orbitAnimation.kill()
  }
  if (resizeTimeout) {
    clearTimeout(resizeTimeout)
  }

  window.removeEventListener('resize', handleResize)
  window.removeEventListener('keydown', toggleOrbitMode)

  if (scene) {
    scene.traverse((object) => {
      if (object.geometry) {
        object.geometry.dispose()
      }
      if (object.material) {
        if (Array.isArray(object.material)) {
          object.material.forEach(material => material.dispose())
        } else {
          object.material.dispose()
        }
      }
    })
    scene.dispose()
  }

  renderer?.dispose()
  orbitControls?.dispose()
})
</script>