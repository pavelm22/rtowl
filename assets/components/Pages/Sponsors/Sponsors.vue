<script setup>

import SlideUpTransition from "../../SlideUpTransition/SlideUpTransition.vue";
import ContactCTA from "../../CTA/Contact/ContactCTA.vue";
import Footer from "../../Footer/Footer.vue";


const props = defineProps({
  activePage: {
    type: String,
    default: '',
    required: true,
  },
  handleMenuClick: {
    type: Function,
    required: true,
  },
  sponsorsData: {
    type: Array,
    required: true,
  }
})
</script>

<template>
  <SlideUpTransition :is-open="activePage === 'sponsors'">
    <div class="container mx-auto px-4 h-100 my-24">
      <div class="text-3xl mb-8 text-center">Sponsoren</div>
      <div class="max-w-3xl mx-auto text-center mb-12">
        <h3 class="text-sm uppercase mb-2">Unsere Sponsoren</h3>
        <h2 class="text-4xl font-bold mb-4">
          Sponsoren sind das Rückgrat unseres Formula Student Teams.
        </h2>
        <p class="text-lg mb-8">
          Ihre Unterstützung ermöglicht es uns, Spitzenleistungen zu erbringen und unsere Leidenschaft für Innovation
          und Technik auszuleben. Werden Sie Teil unserer Erfolgsgeschichte und unterstützen Sie uns dabei, die
          Rennstrecke zu erobern!
        </p>
        <button
            class="owl-button bg-red-600 px-6 py-2 rounded hover:bg-red-700 transition duration-300"
            @click="handleMenuClick('contact')"
        >
          Sponsor werden
        </button>
      </div>

      <hr class="mx-auto border-gray-300 mb-12">

      <div class="container mx-auto px-2 sm:px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
          <div
              v-for="sponsor in sponsorsData"
              :key="sponsor.id"
              class="flex items-center justify-center relative group"
          >
            <a
                :href="sponsor.website"
                target="_blank"
                class="w-full h-32 sm:h-40 flex items-center justify-center p-4 transition duration-300 ease-in-out transform hover:scale-105"
            >
              <img
                  v-if="sponsor.imagePath"
                  :src="sponsor.imagePath"
                  :alt="sponsor.name"
                  class="max-w-full max-h-full object-contain"
              >
              <span
                  v-else
                  class="text-lg font-bold text-gray-800 text-center"
              >
                  {{ sponsor.name }}
                </span>
            </a>
            <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 text-gray-500"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
              >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="relative">
      <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 z-50 pointer-events-auto">
        <button @click="handleMenuClick('sponsors')" class="flex gap-2 items-center">
          <div
              class="p-2 rounded-full justify-center w-10 h-10 border-2 border-red-700 flex items-center gap-1 px-3 py-2 text-black hover:bg-red-100 transition-colors">
            <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                  d="M11.7 15.3l-7-7c-.2-.2-.2-.5 0-.7l7-7c.2-.2.5-.2.7 0 .2.2.2.5 0 .7L5.7 8l6.7 6.3c.2.2.2.5 0 .7-.1.2-.4.2-.7 0z"
                  fill="currentColor"/>
            </svg>
          </div>
          <span class="hover:underline hover:duration-300 decoration-red-800">Zurück</span>
        </button>
      </div>
    </div>
    <ContactCTA :handleMenuClick="handleMenuClick" />
    <Footer :handleMenuClick="handleMenuClick" />
  </SlideUpTransition>
</template>

<style scoped>

</style>