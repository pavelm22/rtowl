<template>
  <PageLayout :show="true">
    <HeroSection class="hero-section" :badge="'OWL RACING TEAM'"
                 :headline="'DAS \n TEAM'"
                 :description="'Entdecken Sie die Leidenschaft und Präzision des OWL Racing-Teams.\n'+
'          Begleiten Sie uns auf unserer Reise von der Konzeption bis zur\n'+
'          Ziellinie – ein Pfad, gepflastert mit Innovation, Teamgeist und\n'+
'          Geschwindigkeit.'"
                 :button-text="'UNSER TEAM'"
                 :button-link="'#team'"
    />

    <section class="py-16 lg:py-24 bg-white">
      <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
        <div>
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Unsere Mitglieder</span>
          <h2 class="mt-2 text-3xl font-bold md:text-4xl">VIELFALT UND LEIDENSCHAFT</h2>
          <p class="mt-4 text-gray-700">
            Unser Team besteht aus Studierenden der Hochschule Ostwestfalen-Lippe
            aus den Fachbereichen Maschinenbau, Elektrotechnik, Wirtschaftsingenieurwesen
            und Medienproduktion. Wir sind ein interdisziplinäres Team, das sich
            durch seine Vielfalt und Leidenschaft für Technik auszeichnet.
          </p>
        </div>
        <div class="relative">
          <img class="w-full h-auto object-cover rounded-lg shadow-2xl"
               src="../../../assets/img/OWL-RacingTeam_November-scaled.jpg" alt="OWL Racing Team"/>
          <div class="absolute inset-0 rounded-lg"></div>
        </div>
      </div>
    </section>

    <section class="py-16 lg:py-24 bg-black">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Führungsspitze</span>
          <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">TEAMLEITUNG</h2>
          <p class="mt-4 text-gray-300 max-w-2xl mx-auto">Unsere Teamleitung steuert und koordiniert die Entwicklung und
            den Erfolg des gesamten Projekts.</p>
        </div>
        <div class="flex justify-center">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
            <div
                v-for="member in leadershipTeam"
                :key="member.name"
                class="bg-white rounded-lg overflow-hidden border border-gray-800 hover:border-red-600 transition-all duration-300 min-w-0 flex flex-col">
              >
              <div class="relative pt-[100%]">
                <img
                    class="absolute top-0 left-0 w-full h-full object-contain"
                    :src="member.imagePath"
                    :alt="member.name"
                />
              </div>
              <div class="p-6 bg-gray-900 flex-grow">
                <h3 class="text-xl font-bold text-white">{{ member.name }}</h3>
                <p class="text-red-600 mb-4 font-semibold">{{ member.position }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 lg:py-24 bg-white">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Unsere Fachbereiche</span>
          <h2 class="mt-2 text-3xl font-bold md:text-4xl">SPEZIALISIERTE TEAMS</h2>
          <p class="mt-4 text-gray-700 max-w-2xl mx-auto">Entdecken Sie die verschiedenen Teams, die unser Rennwagen zum
            Leben erwecken.</p>
        </div>

        <div class="flex flex-wrap justify-center gap-4 mb-16">
          <button
              v-for="team in subTeams"
              :key="team.subTeam"
              class="px-6 py-3 font-semibold rounded-full transition duration-300"
              :class="{
              'bg-red-600 text-white': activeTab === formatTabId(team.subTeam),
              'bg-gray-200 text-gray-700 hover:bg-red-600 hover:text-white': activeTab !== formatTabId(team.subTeam)
            }"
              @click="activeTab = formatTabId(team.subTeam)"
          >
            {{ team.subTeam }}
          </button>
        </div>

        <div class="tab-content">
          <div
              v-for="team in subTeams"
              :key="team.subTeam"
              v-show="activeTab === formatTabId(team.subTeam)"
              class="text-center"
          >
            <h3 class="text-2xl font-bold mb-6">{{ team.subTeam }}</h3>
            <p class="max-w-3xl mx-auto text-gray-700">{{ team.description }}</p>

            <div class="pt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
              <div
                  v-for="member in team.members"
                  :key="member.name"
                  class="bg-white rounded-lg overflow-hidden border border-gray-200 hover:border-red-600 hover:shadow-lg transition-all duration-300"
              >
                <div class="relative pt-[100%]">
                  <img
                      class="absolute top-0 left-0 w-full h-full object-contain"
                      :src="member.imagePath"
                      :alt="member.name"
                  />
                </div>
                <div class="p-6">
                  <h4 class="text-xl font-bold">{{ member.name }}</h4>
                  <p class="text-gray-700 mb-4 font-semibold">{{ member.position }}</p>
                </div>
              </div>
            </div>
          </div>
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
import {computed, onMounted, ref, inject} from "vue";
import ContactCTA from "../../CTA/Contact/ContactCTA.vue";
import Footer from "../../Footer/Footer.vue";
import PageLayout from "@/components/PageLayout/PageLayout.vue";
import HeroSection from "@/components/Pages/Core/HeroSection.vue";

const teamStructure = inject('teamStructure');
const activeTab = ref('');

const formatTabId = (name) => {
  return name.toLowerCase().replace(/\s+/g, '-');
};

const leadershipTeam = computed(() =>
    teamStructure.find(team => team.subTeam === 'Teamleitung')?.members ?? []
);

const subTeams = computed(() =>
    teamStructure.filter(team => team.subTeam !== 'Teamleitung')
);

onMounted(() => {
  // Initialize with the first tab (Powertrain)
  activeTab.value = formatTabId('Powertrain');
});
</script>

<style scoped>
.hero-section {
  will-change: transform, opacity;
}
</style>