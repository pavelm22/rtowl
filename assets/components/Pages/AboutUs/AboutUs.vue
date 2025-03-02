<template>
  <PageLayout :show="true">
    <section class="relative">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent"></div>
      </div>
      <div class="max-w-screen-xl px-4 py-32 mx-auto flex flex-col items-start text-left lg:py-48 relative z-10">
        <span class="inline-block py-1 px-3 mb-4 bg-red-600 text-black font-bold text-xs uppercase tracking-widest">Formula Student Racing Club</span>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">ENGINEERING<br>THE FUTURE<br>OF RACING</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 max-w-lg">A team of passionate engineering students dedicated to designing, building, and racing formula-style vehicles in international competitions.</p>
        <a href="#team" class="inline-flex items-center justify-center px-5 py-3 text-base font-bold text-black bg-red-600 hover:bg-red-700 rounded-lg transition-colors duration-300">
          DISCOVER OUR TEAM
          <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
      </div>
    </section>
    <section class="py-16 lg:py-24 bg-black">
      <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
        <div>
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Our mission</span>
          <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">PUSHING THE LIMITS OF INNOVATION AND PERFORMANCE</h2>
          <p class="mt-4 text-gray-300">Founded in 2012, our Formula Student Racing Club has been competing in international Formula Student competitions, representing our university with pride and determination.</p>
          <p class="mt-4 text-gray-300">We bring together students from engineering, design, business, and marketing to create a comprehensive team that handles every aspect of designing, manufacturing, testing, and racing our formula-style vehicles.</p>
          <div class="mt-8">
            <div class="flex items-center mb-4">
              <div class="w-2 h-2 bg-red-600 mr-2"></div>
              <p class="text-white font-medium">Student-led engineering excellence</p>
            </div>
            <div class="flex items-center mb-4">
              <div class="w-2 h-2 bg-red-600 mr-2"></div>
              <p class="text-white font-medium">Real-world application of academic knowledge</p>
            </div>
            <div class="flex items-center">
              <div class="w-2 h-2 bg-red-600 mr-2"></div>
              <p class="text-white font-medium">Fostering teamwork and leadership</p>
            </div>
          </div>
        </div>
        <div class="flex justify-center">
          <!--        <img src="/api/placeholder/500/400" alt="Racing car in workshop" class="rounded-lg object-cover max-h-96 border-2 border-red-600">-->
        </div>
      </div>
    </section>
    <section id="team" class="py-16 lg:py-24 bg-white">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Our team</span>
          <h2 class="mt-2 text-3xl font-bold  md:text-4xl">THE DRIVING FORCE BEHIND OUR SUCCESS</h2>
          <p class="mt-4 text-gray-900 max-w-2xl mx-auto">Our diverse team brings together expertise from various engineering disciplines to create championship-winning formula cars.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Team Member 1 -->
          <div class="bg-gray-900 rounded-lg overflow-hidden border border-gray-800 hover:border-red-600 transition-all duration-300">
            <!--          <img src="/api/placeholder/400/300" alt="Team member photo" class="w-full h-64 object-cover">-->
            <div class="p-6">
              <h3 class="text-xl font-bold text-white">Alex Johnson</h3>
              <p class="text-red-600 mb-4 font-semibold">Team Captain & Chief Engineer</p>
              <p class="text-gray-300">Mechanical Engineering student with a passion for motorsport and vehicle dynamics.</p>
            </div>
          </div>
          <!-- Team Member 2 -->
          <div class="bg-gray-900 rounded-lg overflow-hidden border border-gray-800 hover:border-red-600 transition-all duration-300">
            <!--          <img src="/api/placeholder/400/300" alt="Team member photo" class="w-full h-64 object-cover">-->
            <div class="p-6">
              <h3 class="text-xl font-bold text-white">Samantha Lee</h3>
              <p class="text-red-600 mb-4 font-semibold">Powertrain Lead</p>
              <p class="text-gray-300">Electrical Engineering student specializing in electric vehicle propulsion systems.</p>
            </div>
          </div>
          <!-- Team Member 3 -->
          <div class="bg-gray-900 rounded-lg overflow-hidden border border-gray-800 hover:border-red-600 transition-all duration-300">
            <!--          <img src="/api/placeholder/400/300" alt="Team member photo" class="w-full h-64 object-cover">-->
            <div class="p-6">
              <h3 class="text-xl font-bold text-white">Marcus Chen</h3>
              <p class="text-red-600 mb-4 font-semibold">Aerodynamics Engineer</p>
              <p class="text-gray-300">Aerospace Engineering student focused on computational fluid dynamics and aero design.</p>
            </div>
          </div>
        </div>
        <div class="text-center mt-12">
          <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-bold text-black bg-red-600 hover:bg-red-700 rounded-lg transition-colors duration-300">
            MEET THE FULL TEAM
          </a>
        </div>
      </div>
    </section>

    <section class="py-16 lg:py-24 bg-black relative overflow-hidden">
      <div class="absolute top-0 right-0 w-64 h-full checkered-border opacity-10"></div>
      <div class="absolute bottom-0 left-0 w-64 h-full checkered-border opacity-10"></div>
      <div class="max-w-screen-xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Our achievements</span>
          <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">RACING TO EXCELLENCE</h2>
          <p class="mt-4 text-gray-300 max-w-2xl mx-auto">Each season brings new challenges and opportunities for innovation as we develop our next generation racing machine.</p>
        </div>

        <!-- Car Timeline -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Car 1 -->
          <div class="bg-white rounded-lg overflow-hidden group">
            <div class="relative">
              <!--            <img src="/api/placeholder/400/300" alt="FS-X22 Racing Car" class="w-full h-56 object-cover">-->
              <div class="absolute top-0 left-0 bg-red-600 text-black py-1 px-4 font-bold">2024</div>
            </div>
            <div class="p-6 border-t-4 border-red-600">
              <h3 class="text-xl font-bold ">FS-X24</h3>
              <p class="text-gray-900 my-4">Our latest electric vehicle featuring advanced aerodynamics and a custom battery management system.</p>
              <ul class="text-sm text-gray-800">
                <li class="mb-1">• 2nd Place - Formula Student Germany</li>
                <li class="mb-1">• 1st Place - Design Event</li>
                <li>• Efficiency Award Winner</li>
              </ul>
            </div>
          </div>

          <!-- Car 2 -->
          <div class="bg-white rounded-lg overflow-hidden group">
            <div class="relative">
              <!--            <img src="/api/placeholder/400/300" alt="FS-X23 Racing Car" class="w-full h-56 object-cover">-->
              <div class="absolute top-0 left-0 bg-red-600 text-black py-1 px-4 font-bold">2023</div>
            </div>
            <div class="p-6 border-t-4 border-red-600">
              <h3 class="text-xl font-bold ">FS-X23</h3>
              <p class="text-gray-900 my-4">Our breakthrough electric vehicle with lightweight composite chassis and adaptive suspension.</p>
              <ul class="text-sm text-gray-800">
                <li class="mb-1">• 3rd Place Overall - Formula Student UK</li>
                <li class="mb-1">• 1st Place - Acceleration Event</li>
                <li>• Best Newcomer Award</li>
              </ul>
            </div>
          </div>

          <!-- Car 3 -->
          <div class="bg-white rounded-lg overflow-hidden group">
            <div class="relative">
              <!--            <img src="/api/placeholder/400/300" alt="FS-X22 Racing Car" class="w-full h-56 object-cover">-->
              <div class="absolute top-0 left-0 bg-red-600 text-black py-1 px-4 font-bold">2022</div>
            </div>
            <div class="p-6 border-t-4 border-red-600">
              <h3 class="text-xl font-bold ">FS-X22</h3>
              <p class="text-gray-900 my-4">Our first competition vehicle featuring a combustion engine and custom ECU programming.</p>
              <ul class="text-sm text-gray-800">
                <li class="mb-1">• 8th Place Overall - Formula Student Italy</li>
                <li class="mb-1">• 4th Place - Endurance Event</li>
                <li>• Cost Analysis Award</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sponsors Section -->
    <section class="py-16 lg:py-24 bg-white">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Our sponsors</span>
          <h2 class="mt-2 text-3xl font-bold  md:text-4xl">POWERED BY PARTNERS</h2>
          <p class="mt-4 text-gray-900 max-w-2xl mx-auto">We are grateful for the support of our sponsors who make our racing dreams possible.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
          <div class="bg-gray-900 p-6 flex items-center justify-center h-32 rounded-lg">
            <!--          <img src="/api/placeholder/150/50" alt="Sponsor logo" class="max-h-16">-->
          </div>
          <div class="bg-gray-900 p-6 flex items-center justify-center h-32 rounded-lg">
            <!--          <img src="/api/placeholder/150/50" alt="Sponsor logo" class="max-h-16">-->
          </div>
          <div class="bg-gray-900 p-6 flex items-center justify-center h-32 rounded-lg">
            <!--          <img src="/api/placeholder/150/50" alt="Sponsor logo" class="max-h-16">-->
          </div>
          <div class="bg-gray-900 p-6 flex items-center justify-center h-32 rounded-lg">
            <!--          <img src="/api/placeholder/150/50" alt="Sponsor logo" class="max-h-16">-->
          </div>
          <div class="bg-gray-900 p-6 flex items-center justify-center h-32 rounded-lg">
            <!--          <img src="/api/placeholder/150/50" alt="Sponsor logo" class="max-h-16">-->
          </div>
          <div class="bg-gray-900 p-6 flex items-center justify-center h-32 rounded-lg">
            <!--          <img src="/api/placeholder/150/50" alt="Sponsor logo" class="max-h-16">-->
          </div>
          <div class="bg-gray-900 p-6 flex items-center justify-center h-32 rounded-lg">
            <!--          <img src="/api/placeholder/150/50" alt="Sponsor logo" class="max-h-16">-->
          </div>
          <div class="bg-gray-900 p-6 flex items-center justify-center h-32 rounded-lg">
            <!--          <img src="/api/placeholder/150/50" alt="Sponsor logo" class="max-h-16">-->
          </div>
        </div>

        <div class="mt-12 text-center">
          <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-bold text-white border-2 border-red-600 hover:bg-red-600 hover:text-black rounded-lg transition-colors duration-300">
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
import {onMounted} from 'vue'
import PageLayout from '../../PageLayout/PageLayout.vue'
import Footer from '../../Footer/Footer.vue'
import ContactCTA from '../../CTA/Contact/ContactCTA.vue'

// Component logic here
onMounted(() => {
  // Any component-specific initialization
})
</script>