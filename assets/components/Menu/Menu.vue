<!-- MainComponent.vue -->
<template>
  <div class="fixed inset-0 pointer-events-none " style="height: var(--app-height)">
    <NavigationHandler
        :activePage="activePage"
        :handleMenuClick="handleMenuClick"
    />
  </div>
  <div class="fixed inset-0 pointer-events-none " style="height: var(--app-height)">
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
                @click="handleMenuClick(button.action)"
            >
              <span>{{ translations.de.navigation?. [button.label] }}</span>
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
          <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2"
               stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path
                d="M14 6a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h2a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1h-3"></path>
            <path
                d="M3 5h2.5a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1 -1.5 1.5h-1.5h1.5a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1 -1.5 1.5h-2.5"></path>
            <path d="M17 7v4a2 2 0 1 0 4 0v-4a2 2 0 1 0 -4 0z"></path>
            <path d="M3 16c0 1.657 4.03 3 9 3s9 -1.343 9 -3"></path>
          </svg>
        </button>

        <button
            @click="toggleMenu"
            class="p-2 rounded-full hover:bg-gray-900 bg-black flex items-center justify-center w-10 h-10 border-2 border-red-800"
        >
          <div class="relative w-6 h-6">
            <span
                :class="[
                'absolute left-1/2 -translate-x-1/2 w-6 h-0.5 bg-red-700 transform transition-all duration-300',
                isMenuOpen ? 'rotate-45 top-3' : 'top-1'
              ]"
            ></span>
            <span
                :class="[
                'absolute left-1/2 -translate-x-1/2 w-6 h-0.5 bg-red-700 top-3 transition-opacity duration-300',
                isMenuOpen ? 'opacity-0' : 'opacity-100'
              ]"
            ></span>
            <span
                :class="[
                'absolute left-1/2 -translate-x-1/2 w-6 h-0.5 bg-red-700 transform transition-all duration-300',
                isMenuOpen ? '-rotate-45 top-3' : 'top-5'
              ]"
            ></span>
          </div>
        </button>
      </div>
    </div>
  </div>
  <AboutUs
      :handle-menu-click="handleMenuClick"
      :activePage="activePage"
  />
  <Sponsors
      :handleMenuClick="handleMenuClick"
      :activePage="activePage"
      :sponsorsData="sponsorsData"
  />
  <Team
      :activePage="activePage"
      :teamStructure="teamStructure"
      :handleMenuClick="handleMenuClick"
  />
  <DataPolicy
      :handleMenuClick="handleMenuClick"
      :activePage="activePage"
  />
  <Impressum
      :handleMenuClick="handleMenuClick"
      :activePage="activePage"
  />
  <Contact
      :active-page="activePage"
      :handleMenuClick="handleMenuClick"/>
</template>

<script setup>
import {ref, onMounted, onUnmounted, computed} from 'vue'
import AboutUs from "../Pages/AboutUs/AboutUs.vue"
import Team from "../Pages/Team/Team.vue"
import DataPolicy from "../Pages/DataPolicy/DataPolicy.vue"
import Impressum from "../Pages/Impressum/Impressum.vue"
import Sponsors from "../Pages/Sponsors/Sponsors.vue"
import NavigationHandler from "../NavigationHandler/NavigationHandler.vue"
import sponsorsData from "./Sponsors.json"
import teamStructure from "./TeamStructure.json"
import translations from "./translations.json"
import Contact from "../Pages/Contact/Contact.vue";

const emit = defineEmits(['toggleOrbit'])
const isMenuOpen = ref(false)
const is360Active = ref(false)

const activePage = ref('')


const menuButtons = [
  {label: 'about_us', action: 'aboutUs'},
  {label: 'sponsors', action: 'sponsors'},
  {label: 'team', action: 'team'},
  {label: 'data_policy', action: 'data_policy'},
  {label: 'impressum', action: 'impressum'},
  {label: 'contact', action: 'contact'},
]

const handleMenuClick = (action) => {
  if (action === activePage.value) {
    activePage.value = '';
  } else {
    activePage.value = action;
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