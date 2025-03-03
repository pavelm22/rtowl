<!-- Menu.vue -->
<template>
  <div class="fixed inset-0 pointer-events-none" style="height: var(--app-height)">
    <div
        v-show="isMenuOpen"
        class="fixed bottom-20 left-0 right-0 flex justify-center px-4 pointer-events-auto"
    >
      <div class="bg-transparent overflow-hidden transition-all duration-300"
           :class="[
             'transform transition-transform',
             isMenuOpen ? 'translate-y-0' : 'translate-y-full',
             'sm:w-auto w-full'
           ]"
      >
        <div class="grid gap-4 p-4">
          <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 justify-items-center">
            <button
                v-for="(button, index) in menuButtons"
                :key="index"
                class="transition-colors text-center duration-300 bg-black hover:bg-neutral-800 border-2 border-red-500 rounded text-white p-3 cursor-pointer w-full sm:w-64 md:w-56 lg:w-64"
                @click="handleMenuClick(button.path)"
            >
              <span>{{ translations.de.navigation?.[button.label] }}</span>
            </button>
          </div>
          <div class="grid grid-cols-2 gap-4 justify-items-center">
            <button
                class="transition-colors text-center duration-300 bg-black hover:bg-neutral-800 border-2 border-red-500 rounded text-white p-3 cursor-pointer w-full sm:w-64 md:w-56 lg:w-64">
              Instagram
            </button>
            <button
                class="transition-colors text-center duration-300 bg-black hover:bg-neutral-800 border-2 border-red-500 rounded text-white p-3 cursor-pointer w-full sm:w-64 md:w-56 lg:w-64">
              Xing
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="fixed bottom-0 left-0 right-0 flex justify-center p-4 pointer-events-auto">
      <div class="flex gap-8">
        <button
            v-if="!isMenuOpen"
            @click="handleOrbitToggle"
            class="p-2 rounded-full hover:bg-gray-900 flex items-center justify-center w-10 h-10 border-2 border-red-800"
            :class="is360Active ? 'bg-blue-100' : 'hover:bg-gray-100 bg-black'"
        >
          <Icon3D />
        </button>

        <div>
          <button
              @click="toggleMenu"
              class="p-2 rounded-full hover:bg-gray-900 bg-black flex items-center justify-center w-10 h-10 border-2 border-red-800"
          >
            <MenuIcon :isOpen="isMenuOpen"/>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted, computed } from 'vue'
import { useRouter, useRoute } from 'vue-router'
import translations from '../Menu/translations.json'
import Icon3D from '../Icons/3DIcon.vue'
import MenuIcon from '../Icons/MenuIcon.vue'
const emit = defineEmits(['toggleOrbit'])
const isMenuOpen = ref(false)
const is360Active = ref(false)
const router = useRouter()
const route = useRoute()

const menuButtons = [
  { label: 'about_us', path: '/about-us' },
  { label: 'sponsors', path: '/sponsors' },
  { label: 'team', path: '/team' },
  { label: 'data_policy', path: '/data-policy' },
  { label: 'legal_notice', path: '/legal-notice' },
  { label: 'contact', path: '/contact' },
]

const handleMenuClick = (path) => {
  if (route.path === path) {
    router.push('/')
  } else {
    router.push(path)
  }

  isMenuOpen.value = false
}

const handleOrbitToggle = () => {
  emit('toggleOrbit')
  is360Active.value = !is360Active.value
}

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}

// Handle mobile viewport height
const updateAppHeight = () => {
  document.documentElement.style.setProperty('--app-height', `${window.innerHeight}px`)
}

onMounted(() => {
  // Initial setup
  updateAppHeight()
  // Set header height
  document.documentElement.style.setProperty('--header-height', '5rem')

  // Update on resize and orientation change
  window.addEventListener('resize', updateAppHeight)
  window.addEventListener('orientationchange', updateAppHeight)
})

onUnmounted(() => {
  window.removeEventListener('resize', updateAppHeight)
  window.removeEventListener('orientationchange', updateAppHeight)
})
</script>

<style>
:root {
  --app-height: 100vh;
  --header-height: 5rem;
}

/* Optional: Hide scrollbar for Webkit browsers */
::-webkit-scrollbar {
  display: none;
}

/* Optional: Hide scrollbar for Firefox */
* {
  scrollbar-width: none;
}
</style>