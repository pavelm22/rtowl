<template>
  <PageLayout :show="true">
    <!-- Hero Section -->
    <section class="relative">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent"></div>
      </div>
      <div class="max-w-screen-xl px-4 py-32 mx-auto flex flex-col items-start text-left lg:py-48 relative z-10">
        <span class="inline-block py-1 px-3 mb-4 bg-red-600 text-black font-bold text-xs uppercase tracking-widest">OWL Racing Team</span>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">SPONSOREN</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 max-w-lg">
          Die Partner, die unser Team unterstützen und unsere Erfolge möglich machen.
          Gemeinsam schreiben wir Erfolgsgeschichte im Formula Student Racing.
        </p>
        <a href="/contact" class="inline-flex items-center justify-center px-5 py-3 text-base font-bold text-black bg-red-600 hover:bg-red-700 rounded-lg transition-colors duration-300">
          SPONSOR WERDEN
          <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
      </div>
    </section>

    <!-- Sponsors Introduction Section -->
    <section class="py-16 lg:py-24 bg-white">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Partnerschaft</span>
          <h2 class="mt-2 text-3xl font-bold md:text-4xl">DAS RÜCKGRAT UNSERES TEAMS</h2>
          <p class="mt-4 text-gray-700 max-w-2xl mx-auto">
            Sponsoren sind das Rückgrat unseres Formula Student Teams.
            Ihre Unterstützung ermöglicht es uns, Spitzenleistungen zu erbringen und unsere Leidenschaft für Innovation
            und Technik auszuleben. Werden Sie Teil unserer Erfolgsgeschichte und unterstützen Sie uns dabei, die
            Rennstrecke zu erobern!
          </p>
        </div>
      </div>
    </section>

    <!-- Sponsors Grid Section -->
    <section class="py-16 lg:py-24 bg-gray-100">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Unsere Unterstützer</span>
          <h2 class="mt-2 text-3xl font-bold md:text-4xl">PARTNERSCHAFTEN, DIE BEGEISTERN</h2>
          <p class="mt-4 text-gray-700 max-w-2xl mx-auto">
            Wir danken unseren Sponsoren herzlich für ihre Unterstützung. Gemeinsam erreichen wir mehr.
          </p>
        </div>

        <!-- Sponsors Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <div
              v-for="sponsor in sponsorsData"
              :key="sponsor.id"
              class="bg-white rounded-lg shadow-md p-6 flex items-center justify-center h-48 relative group transform transition duration-300 hover:shadow-xl hover:-translate-y-1"
          >
            <a
                :href="sponsor.website"
                target="_blank"
                class="w-full h-full flex items-center justify-center"
            >
              <img
                  v-if="sponsor.imagePath"
                  :src="sponsor.imagePath"
                  :alt="sponsor.name"
                  class="max-w-full max-h-full object-contain"
              >
              <span
                  v-else
                  class="text-xl font-bold text-gray-800 text-center"
              >
                {{ sponsor.name }}
              </span>
            </a>
            <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 text-red-600"
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
    </section>

    <!-- Sponsorship Benefits Section -->
    <section class="py-16 lg:py-24 bg-white">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Ihre Vorteile</span>
          <h2 class="mt-2 text-3xl font-bold md:text-4xl">WARUM SIE SPONSOR WERDEN SOLLTEN</h2>
          <p class="mt-4 text-gray-700 max-w-2xl mx-auto">
            Als Sponsor des OWL Racing Teams profitieren Sie von zahlreichen Vorteilen und einer starken Partnerschaft.
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <!-- Benefit 1 -->
          <div class="bg-gray-100 rounded-lg p-8 text-center">
            <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-4">Sichtbarkeit & Präsenz</h3>
            <p class="text-gray-700">
              Ihr Logo auf unserem Rennwagen, unserer Website und bei allen Veranstaltungen.
              Profitieren Sie von unserer Medienpräsenz bei nationalen und internationalen Events.
            </p>
          </div>

          <!-- Benefit 2 -->
          <div class="bg-gray-100 rounded-lg p-8 text-center">
            <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-4">Nachwuchsförderung</h3>
            <p class="text-gray-700">
              Unterstützen Sie die Ausbildung zukünftiger Ingenieure und Fachkräfte.
              Knüpfen Sie frühzeitig Kontakte zu talentierten Studierenden für Ihr Unternehmen.
            </p>
          </div>

          <!-- Benefit 3 -->
          <div class="bg-gray-100 rounded-lg p-8 text-center">
            <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-4">Innovation & Technologie</h3>
            <p class="text-gray-700">
              Seien Sie Teil eines innovativen Projekts im Motorsport.
              Profitieren Sie von unserem technischen Know-how und unseren kreativen Lösungsansätzen.
            </p>
          </div>
        </div>

        <div class="text-center mt-12">
          <a href="/contact" class="inline-flex items-center justify-center px-5 py-3 text-base font-bold bg-black text-white border-2 border-red-600 hover:bg-red-600 hover:text-black rounded-lg transition-colors duration-300"> Sponsor werden</a>
        </div>
      </div>
    </section>

    <template #footer>
      <ContactCTA />
      <Footer />
    </template>
  </PageLayout>
</template>

<script setup>
import { inject } from "vue";
import ContactCTA from "../../CTA/Contact/ContactCTA.vue";
import Footer from "../../Footer/Footer.vue";
import PageLayout from "@/components/PageLayout/PageLayout.vue";
import { useRouter, useRoute } from "vue-router";

const router = useRouter();
const route = useRoute();
const sponsorsData = inject('sponsorsData');

function navigateToSponsors() {
  router.push({ name: 'sponsors' });
}

function handleMenuClick(page) {
  router.push({ name: page });
}
</script>

<style scoped>
/* Add any custom styles if needed */
</style>