<script setup>
import {RouterView, useRoute} from "vue-router";
import Menu from "@/components/Menu/Menu.vue";
import Header from "@/components/Header/Header.vue";
import ThreeScene from "@/components/ThreeScene/ThreeScene.vue";
import CookieBanner from "@/components/CookieBanner/CookieBanner.vue";
import {computed, onMounted, provide, ref} from "vue";
import sponsorsData from "@/components/Menu/Sponsors.json";
import teamStructure from "@/components/Menu/TeamStructure.json";

const loadingProgress = ref(0)
const threeSceneRef = ref(null)
const isHeaderSmall = ref(false)
const route = useRoute()

// Provide shared data to child components
provide('sponsorsData', sponsorsData)
provide('teamStructure', teamStructure)

// Compute if ThreeScene should be visible based on route metadata
const showThreeScene = computed(() => {
  return route.meta.showThreeScene !== false
})

const handleHeaderState = (small) => {
  isHeaderSmall.value = small
}

const handleOrbitToggle = () => {
  if (threeSceneRef.value && typeof threeSceneRef.value.toggleOrbitMode === 'function') {
    threeSceneRef.value.toggleOrbitMode()
  }
}

// Set up CSS variables for viewport height
onMounted(() => {
  const updateAppHeight = () => {
    document.documentElement.style.setProperty('--app-height', `${window.innerHeight}px`)
    document.documentElement.style.setProperty('--header-height', '5rem')
  }

  updateAppHeight()

  window.addEventListener('resize', updateAppHeight)
  window.addEventListener('orientationchange', updateAppHeight)

  return () => {
    window.removeEventListener('resize', updateAppHeight)
    window.removeEventListener('orientationchange', updateAppHeight)
  }
})

</script>

<template>
  <div class="h-screen">
    <ThreeScene
        v-if="showThreeScene"
        ref="threeSceneRef"
        @update:progress="loadingProgress = $event"
    />

    <Header
        :loadingProgress="loadingProgress"
        @headerStateChange="handleHeaderState"
    />

    <router-view v-slot="{ Component }">
      <component :is="Component" :handleOrbitToggle="handleOrbitToggle"/>
    </router-view>

    <CookieBanner />
  </div>
</template>

<style scoped>
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