<script setup>

import SlideUpTransition from "../../SlideUpTransition/SlideUpTransition.vue";
import Slider from "../../Slider/Slider.vue";
import Footer from "../../Footer/Footer.vue";
import ContactCTA from "../../CTA/Contact/ContactCTA.vue";

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

})
</script>

<template>
  <SlideUpTransition :is-open="activePage === 'aboutUs'">
    <div class="container mx-auto px-4 h-100 my-24">
      <div class="text-3xl mb-8 text-center">Über Uns</div>
      <p class="mb-6 text-center font-normal">
        Das OWL Racing-Team setzt sich aus den Subteams Powertrain, Mechanik, Aerodynamik und Body sowie
        Marketing zusammen. Gemeinsam planen, konstruieren und fertigen wir jährlich einen neuen Rennwagen, mit
        dem wir am Formula Student Event teilnehmen. Dank unserer vielseitig unterstützenden Sponsoren können
        wir seit 2009 bei diesem Projekt mitwirken. Die Teilnahme an den Events führte uns bereits zum
        Hockenheimring in Deutschland bis über die Grenzen nach Italien, Österreich, Ungarn, Tschechien und
        England. Der Verein OWL Racing-Team wurde im Rahmen des Formula Student Projekts an der Hochschule
        Ostwestfalen-Lippe, im Jahre 2008 gegründet.
      </p>
      <div>
        <Slider :slides="[]" />
      </div>
    </div>
    <div class="relative">
      <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 z-50 pointer-events-auto">
        <button @click="handleMenuClick('aboutUs')" class="flex gap-2 items-center">
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
    <Footer :handleMenuClick="handleMenuClick"/>
  </SlideUpTransition>
</template>

<style scoped>


</style>