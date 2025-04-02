<!-- App.vue -->
<script setup>
import ThreeScene from './components/ThreeScene/ThreeScene.vue'
import Header from './components/Header/Header.vue'
import { ref, provide, computed, onMounted } from 'vue'
import Menu from "./components/Menu/Menu.vue"
import CookieBanner from "./components/CookieBanner/CookieBanner.vue"
import {RouterView, useRoute} from 'vue-router'
import sponsorsData from './components/Menu/Sponsors.json'
import teamStructure from './components/Menu/TeamStructure.json'


</script>

<template>
  <RouterView v-slot="{ Component }">
  <component :is="Component" /></RouterView>
</template>

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