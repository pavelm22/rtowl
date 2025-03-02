<script setup>

import SlideUpTransition from "../../SlideUpTransition/SlideUpTransition.vue";
import {computed, onMounted, ref} from "vue";
import ContactCTA from "../../CTA/Contact/ContactCTA.vue";
import Footer from "../../Footer/Footer.vue";

const props = defineProps({
  teamStructure: {
    type: Array,
    required: true,
  }
});

const activeTab = ref('')

const formatTabId = (name) => {
  return name.toLowerCase().replace(/\s+/g, '-')
}

const leadershipTeam = computed(() =>
    props.teamStructure.find(team => team.subTeam === 'Teamleitung')?.members ?? []
)

const subTeams = computed(() =>
    props.teamStructure.filter(team => team.subTeam !== 'Teamleitung')
)
onMounted(() => {
  activeTab.value = formatTabId('Powertrain')

})
</script>

<template>
  <SlideUpTransition :is-open="activePage === 'team'">
    <div class="container mx-auto px-2 sm:px-4 my-24">
      <!-- Header Section -->
      <div class="text-center mb-16">
        <h1 class="text-5xl font-bold mb-6">Das <span class="text-red-600">Team</span></h1>
        <p class="max-w-3xl mx-auto text-lg">
          Entdecken Sie die Leidenschaft und Präzision des OWL Racing-Teams.
          Begleiten Sie uns auf unserer Reise von der Konzeption bis zur
          Ziellinie – ein Pfad, gepflastert mit Innovation, Teamgeist und
          Geschwindigkeit. Sind Sie bereit, die nächste Kurve mit uns zu nehmen?
        </p>
      </div>
      <div class="grid md:grid-cols-2 gap-12 items-center mb-24 text-center">
        <div class="space-y-6">
          <h2 class="text-4xl font-bold">Unsere Mitglieder</h2>
          <p class="text-lg text-gray-600">
            Unser Team besteht aus Studierenden der Hochschule Ostwestfalen-Lippe
            aus den Fachbereichen Maschinenbau, Elektrotechnik, Wirtschaftsingenieurwesen
            und Medienproduktion. Wir sind ein interdisziplinäres Team, das sich
            durch seine Vielfalt und Leidenschaft für Technik auszeichnet.
          </p>
        </div>
        <div class="relative">
          <img class="w-full h-auto object-cover rounded-lg shadow-2xl" src="../../../assets/img/OWL-RacingTeam_November-scaled.jpg" alt="OWL Racing Team" />
          <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-transparent opacity-20 rounded-lg"></div>
        </div>
      </div>
      <!-- Team Leadership Section -->
      <div class="mb-24">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Teamleitung</h2>
        <div class="flex flex-wrap justify-center gap-8">
          <div
              v-for="member in leadershipTeam"
              :key="member.name"
              class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5"
          >
            <div class="relative pt-[100%]">
              <img
                  class="absolute top-0 left-0 w-full h-full object-contain"
                  :src="member.imagePath"
                  :alt="member.name"
              />
            </div>
            <div class="p-4 flex-grow">
              <h4 class="font-semibold text-lg">{{ member.name }}</h4>
              <h6 class="text-gray-600 mt-2">{{ member.position }}</h6>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div style="margin: 3rem 0 3rem 0">
          <ul class="flex flex-wrap justify-center gap-4" role="tablist" style="padding-left: 0!important;">
            <li
                v-for="team in subTeams"
                :key="team.subTeam"
                role="presentation"
            >
              <button
                  class="px-6 py-3 font-semibold text-gray-700 rounded-full hover:bg-red-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-300"
                  :class="{ 'bg-red-600 text-white': activeTab === formatTabId(team.subTeam) }"
                  role="tab"
                  @click="activeTab = formatTabId(team.subTeam)"
              >
                {{ team.subTeam }}
              </button>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div
            v-for="team in teamStructure"
            :key="team.subTeam"
            :id="formatTabId(team.subTeam)"
            v-show="activeTab === formatTabId(team.subTeam)"
            class="tab-pane text-center"
        >
          <h3 class="text-2xl font-semibold mb-6">{{ team.subTeam }}</h3>
          <p>{{ team.description }}</p>
          <div class="flex flex-wrap justify-center gap-8 mt-8">
            <div
                v-for="member in team.members"
                :key="member.name"
                class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5"
            >
              <div class="relative pt-[100%]">
                <img
                    class="absolute top-0 left-0 w-full h-full object-contain"
                    :src="member.imagePath"
                    :alt="member.name"
                />
              </div>
              <div class="p-4 flex-grow">
                <h4 class="font-semibold text-lg">{{ member.name }}</h4>
                <h6 class="text-gray-600 mt-2">{{ member.position }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="relative">
      <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 z-50 pointer-events-auto">
        <button @click="handleMenuClick('team')" class="flex gap-2 items-center">
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