<template>
  <PageLayout :show="true">
    <!-- Hero Section -->
    <section class="relative">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent"></div>
      </div>
      <div class="max-w-screen-xl px-4 py-32 mx-auto flex flex-col items-start text-left lg:py-48 relative z-10">
        <span class="inline-block py-1 px-3 mb-4 bg-red-600 text-black font-bold text-xs uppercase tracking-widest">OWL Racing Team</span>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
          SPONSOREN</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 max-w-lg">
          Die Partner, die unser Team unterstützen und unsere Erfolge möglich machen.
          Gemeinsam schreiben wir Erfolgsgeschichte im Formula Student Racing.
        </p>
        <a href="/contact"
           class="inline-flex items-center justify-center px-5 py-3 text-base font-bold text-black bg-red-600 hover:bg-red-700 rounded-lg transition-colors duration-300">
          SPONSOR WERDEN
          <ArrowIcon/>
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

    <section class="py-16 lg:py-24 bg-gray-100">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Unsere Unterstützer</span>
          <h2 class="mt-2 text-3xl font-bold md:text-4xl">PARTNERSCHAFTEN, DIE BEGEISTERN</h2>
          <p class="mt-4 text-gray-700 max-w-2xl mx-auto">
            Wir danken unseren Sponsoren herzlich für ihre Unterstützung. Gemeinsam erreichen wir mehr.
          </p>
        </div>

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
          <div class="bg-gray-100 rounded-lg p-8 text-center">
            <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
              <MouseClickIcon/>
            </div>
            <h3 class="text-xl font-bold mb-4">Sichtbarkeit & Präsenz</h3>
            <p class="text-gray-700">
              Ihr Logo auf unserem Rennwagen, unserer Website und bei allen Veranstaltungen.
              Profitieren Sie von unserer Medienpräsenz bei nationalen und internationalen Events.
            </p>
          </div>

          <div class="bg-gray-100 rounded-lg p-8 text-center">
            <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
              <CommunityIcon/>
            </div>
            <h3 class="text-xl font-bold mb-4">Nachwuchsförderung</h3>
            <p class="text-gray-700">
              Unterstützen Sie die Ausbildung zukünftiger Ingenieure und Fachkräfte.
              Knüpfen Sie frühzeitig Kontakte zu talentierten Studierenden für Ihr Unternehmen.
            </p>
          </div>

          <div class="bg-gray-100 rounded-lg p-8 text-center">
            <div class="bg-red-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
              <LabIcon/>
            </div>
            <h3 class="text-xl font-bold mb-4">Innovation & Technologie</h3>
            <p class="text-gray-700">
              Seien Sie Teil eines innovativen Projekts im Motorsport.
              Profitieren Sie von unserem technischen Know-how und unseren kreativen Lösungsansätzen.
            </p>
          </div>
        </div>

        <div class="text-center mt-12">
          <a href="/contact"
             class="inline-flex items-center justify-center px-5 py-3 text-base font-bold bg-black text-white border-2 border-red-600 hover:bg-red-600 hover:text-black rounded-lg transition-colors duration-300">
            Sponsor werden</a>
        </div>
      </div>
    </section>

    <template #footer>
      <ContactCTA/>
      <Footer/>
    </template>
  </PageLayout>
</template>

<script setup>
import {inject} from "vue";
import ContactCTA from "../../CTA/Contact/ContactCTA.vue";
import Footer from "../../Footer/Footer.vue";
import PageLayout from "@/components/PageLayout/PageLayout.vue";
import {useRouter, useRoute} from "vue-router";
import ArrowIcon from "@/components/Icons/ArrowIcon.vue";
import MouseClickIcon from "@/components/Icons/MouseClickIcon.vue";
import CommunityIcon from "@/components/Icons/CommunityIcon.vue";
import LabIcon from "@/components/Icons/LabIcon.vue";

const router = useRouter();
const route = useRoute();
const sponsorsData = inject('sponsorsData');

function navigateToSponsors() {
  router.push({name: 'sponsors'});
}

function handleMenuClick(page) {
  router.push({name: page});
}
</script>

<style scoped>
/* Add any custom styles if needed */
</style>