<script setup>
import ThreeScene from './components/ThreeScene/ThreeScene.vue'
import Header from './components/Header/Header.vue'
import { ref } from 'vue'
import Menu from "./components/Menu/Menu.vue";
import CookieBanner from "./components/CookieBanner/CookieBanner.vue";

const loadingProgress = ref(0)
const threeSceneRef = ref(null)
const isHeaderSmall = ref(false)

const handleHeaderState = (small) => {
  isHeaderSmall.value = small
}
const handleOrbitToggle = () => {
  threeSceneRef.value?.toggleOrbitMode()
}

</script>

<template>
  <div class="h-screen">
    <ThreeScene
      ref="threeSceneRef"
      @update:progress="loadingProgress = $event"
    />
    <Header
        :loadingProgress="loadingProgress"
        @headerStateChange="handleHeaderState"
    />
<!--    <Menu
        @toggle-orbit="handleOrbitToggle"
    />-->
    <CookieBanner />
  </div>
</template>

<style scoped>

</style>
