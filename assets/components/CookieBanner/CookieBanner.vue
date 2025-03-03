<!-- CookieBanner.vue -->
<template>
  <div v-if="isVisible" class="fixed bottom-0 left-0 right-0 bg-black text-white p-4 shadow-lg">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
      <p class="text-sm flex-1">
        Diese Website verwendet keine Cookies. Dies ist nur ein Informationsbanner für zukünftige Funktionen.
        Wir respektieren Ihre Privatsphäre und informieren Sie, sobald sich dies ändert.
      </p>
      <div class="flex items-center gap-4">
        <button
            @click="handleAccept"
            class="transition-colors text-center duration-300 bg-black hover:bg-neutral-800 border-2 border-red-700 rounded text-white p-3 cursor-pointer w-full sm:w-64 md:w-56 lg:w-64"
        >
          Verstanden
        </button>
        <button
            @click="handleDismiss"
            class="text-gray-400 hover:text-gray-300 transition-colors"
            aria-label="Schließen"
        >
          <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const isVisible = ref(true)

const handleAccept = () => {
  isVisible.value = false
  localStorage.setItem('cookieConsent', 'accepted')
}

const handleDismiss = () => {
  isVisible.value = false
  localStorage.setItem('cookieConsent', 'dismissed')
}

onMounted(() => {
  const savedConsent = localStorage.getItem('cookieConsent')
  if (savedConsent) {
    isVisible.value = false
  }
})
</script>