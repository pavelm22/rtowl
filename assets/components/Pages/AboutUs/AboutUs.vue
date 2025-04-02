<template>
  <PageLayout :show="true">
    <HeroSection :badge="'OWL RACING TEAM'"
                 :headline="'ENGINEERING\nTHE FUTURE\nOF RACING'"
                 :description="'A team of passionate engineering students dedicated to designing, building, and racing formula-style vehicles in international competitions.'"
                 :button-text="'OUR TEAM'"
                 :button-link="'#team'"
    />
    <section class="py-16 lg:py-24 bg-black">
      <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
        <div>
          <span class="text-sm font-bold text-red-700 uppercase tracking-wider">
            {{ translations?.mission?.tagline?.de }}
          </span>
          <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">
            {{ translations?.mission?.title?.de }}
          </h2>
          <p v-for="descriptionPoint in translations?.mission?.description" class="mt-4 text-gray-300">
            {{ descriptionPoint?.de }}
          </p>
          <div class="mt-8">
            <div v-for="bulletPoint in translations?.mission?.points" class="flex items-center mb-4">
              <div class="w-2 h-2 bg-red-700 mr-2"></div>
              <p class="text-white font-medium">{{ bulletPoint?.de }}</p>
            </div>
          </div>
        </div>
        <div class="flex justify-center">
          <img src="../../../assets/img/DSC09538-scaled.jpg" alt="Racing car in workshop"
               class="rounded-lg object-cover max-h-96 border-2 border-red-600">
        </div>
      </div>
    </section>
    <section id="team" class="py-16 lg:py-24 bg-white">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-700 uppercase tracking-wider">
            {{ translations?.team?.tagline?.de }}
          </span>
          <h2 class="mt-2 text-3xl font-bold  md:text-4xl">{{ translations?.team?.title?.de }}</h2>
          <p class="mt-4 text-gray-900 max-w-2xl mx-auto">{{ translations?.team?.description?.de }}</p>
        </div>
        <div class="flex justify-center">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
            <div
                v-for="teamMember in leadershipTeam"
                class="bg-white rounded-lg overflow-hidden border border-gray-800 hover:border-red-600 transition-all duration-300 min-w-0 flex flex-col">
              <img :src="teamMember.imagePath" alt="Team member photo" class="w-full h-64 object-contain">
              <div class="p-6 bg-gray-900 flex-grow">
                <h3 class="text-xl font-bold text-white">{{ teamMember.name }}</h3>
                <p class="text-red-700 mb-4 font-semibold">{{ teamMember.position }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-12">
          <a href="/team"
             class="inline-flex items-center justify-center px-5 py-3 text-base font-bold bg-black text-white border-2 border-red-700 hover:bg-red-600 hover:text-black rounded-lg transition-colors duration-300">
            {{ translations?.team?.button?.de }}
          </a>
        </div>
      </div>
    </section>

    <!--
<section class="py-16 lg:py-24 bg-black relative overflow-hidden">
  <div class="absolute top-0 right-0 w-64 h-full checkered-border opacity-10"></div>
  <div class="absolute bottom-0 left-0 w-64 h-full checkered-border opacity-10"></div>
  <div class="max-w-screen-xl mx-auto px-4 relative z-10">
    <div class="text-center mb-16">
      <span class="text-sm font-bold text-red-700 uppercase tracking-wider">
        {{ translations?.achievements?.tagline?.de }}
      </span>
      <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">
        {{ translations?.achievements?.title?.de }}
      </h2>
      <p class="mt-4 text-gray-300 max-w-2xl mx-auto">
        {{ translations?.achievements?.description?.de }}
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white rounded-lg overflow-hidden group">
        <div class="relative">
          <img src="/api/placeholder/400/300" alt="FS-X22 Racing Car" class="w-full h-56 object-cover">
          <div class="absolute top-0 left-0 bg-red-700 text-black py-1 px-4 font-bold">2024</div>
        </div>
        <div class="p-6 border-t-4 border-red-700">
          <h3 class="text-xl font-bold ">FS-X24</h3>
          <p class="text-gray-900 my-4">Our latest electric vehicle featuring advanced aerodynamics and a custom
            battery management system.</p>
          <ul class="text-sm text-gray-800">
            <li class="mb-1">• 2nd Place - Formula Student Germany</li>
            <li class="mb-1">• 1st Place - Design Event</li>
            <li>• Efficiency Award Winner</li>
          </ul>
        </div>
      </div>

      <div class="bg-white rounded-lg overflow-hidden group">
        <div class="relative">
          <img src="/api/placeholder/400/300" alt="FS-X23 Racing Car" class="w-full h-56 object-cover">
          <div class="absolute top-0 left-0 bg-red-700 text-black py-1 px-4 font-bold">2023</div>
        </div>
        <div class="p-6 border-t-4 border-red-700">
          <h3 class="text-xl font-bold ">FS-X23</h3>
          <p class="text-gray-900 my-4">Our breakthrough electric vehicle with lightweight composite chassis and
            adaptive suspension.</p>
          <ul class="text-sm text-gray-800">
            <li class="mb-1">• 3rd Place Overall - Formula Student UK</li>
            <li class="mb-1">• 1st Place - Acceleration Event</li>
            <li>• Best Newcomer Award</li>
          </ul>
        </div>
      </div>

      <div class="bg-white rounded-lg overflow-hidden group">
        <div class="relative">
          <img src="/api/placeholder/400/300" alt="FS-X22 Racing Car" class="w-full h-56 object-cover">
          <div class="absolute top-0 left-0 bg-red-700 text-black py-1 px-4 font-bold">2022</div>
        </div>
        <div class="p-6 border-t-4 border-red-700">
          <h3 class="text-xl font-bold ">FS-X22</h3>
          <p class="text-gray-900 my-4">Our first competition vehicle featuring a combustion engine and custom ECU
            programming.</p>
          <ul class="text-sm text-gray-800">
            <li class="mb-1">• 8th Place Overall - Formula Student Italy</li>
            <li class="mb-1">• 4th Place - Endurance Event</li>
            <li>• Cost Analysis Award</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>-->

    <!-- Sponsors Section -->
    <section class="py-16 lg:py-24 bg-black text-white">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-700 uppercase tracking-wider">Our sponsors</span>
          <h2 class="mt-2 text-3xl font-bold  md:text-4xl">POWERED BY PARTNERS</h2>
          <p class="mt-4 max-w-2xl mx-auto">We are grateful for the support of our sponsors who make our
            racing dreams possible.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div v-for="sponsor in firstThreeSponsors"
               class="bg-gray-900 p-6 flex items-center justify-center h-32 rounded-lg">
            <img :src="sponsor.imagePath" alt="Sponsor logo" class="max-h-16">
          </div>
        </div>

        <div class="mt-12 text-center">
          <a href="/contact"
             class="inline-flex items-center justify-center px-5 py-3 text-base font-bold bg-black text-white border-2 border-red-700 hover:bg-red-600 hover:text-black rounded-lg transition-colors duration-300">
            BECOME A SPONSOR
          </a>
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
import {computed, inject, onMounted} from 'vue'
import PageLayout from '../../PageLayout/PageLayout.vue'
import Footer from '../../Footer/Footer.vue'
import ContactCTA from '../../CTA/Contact/ContactCTA.vue'
import ArrowIcon from "@/components/Icons/ArrowIcon.vue";
import HeroSection from "@/components/Pages/Core/HeroSection.vue";

const teamStructure = inject('teamStructure');
const sponsorsData = inject('sponsorsData');
import translations from './translations.json';

const firstThreeSponsors = computed(() =>
    sponsorsData.slice(0, 3)
)

const leadershipTeam = computed(() =>
    teamStructure.find(team => team?.subTeam === 'Teamleitung')?.members ?? []
);
onMounted(() => {
  // Any component-specific initialization
})
</script>