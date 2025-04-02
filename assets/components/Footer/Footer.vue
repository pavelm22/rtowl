<script setup>
import { useRouter, useRoute } from "vue-router";
const router = useRouter()

const route = useRoute()

function navigateToLegalNotice() {
  router.push({ name: 'legal_notice' })
}

function navigateToDataPolicy() {
  router.push({ name: 'data_policy' })
}

function navigateToContact() {
  router.push({ name: 'contact' })
}
</script>

<template>
  <div class="bg-black text-white">
    <div class="container mx-auto px-6 py-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div class="order-2 md:order-1">
          <h3 class="text-white font-semibold mb-4">Rechtliches</h3>
          <ul class="space-y-2">
            <li>
              <a @click="navigateToLegalNotice()" class="hover:text-white transition-colors cursor-pointer">Impressum</a>
            </li>
            <li>
              <a @click="navigateToDataPolicy()" class="hover:text-white transition-colors cursor-pointer">Datenschutz</a>
            </li>
          </ul>
        </div>

        <div class="order-1 md:order-2">
          <h3 class="text-white font-semibold mb-4">Social Media</h3>
          <div class="flex justify-center space-x-6">
            <a href="#" class="hover:text-white transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-16 w-16 sm:w-12 sm:h-12 fill-gray-900 dark:fill-white">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
              </svg>
            </a>
            <a href="https://www.instagram.com/owlracingteam/" class="hover:text-white transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-16 h-16 sm:w-12 sm:h-12 fill-gray-900 dark:fill-white" viewBox="0,0,256,256">
                <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M43.69922,2.09766h-37.48437c-2.30078,0 -4.21484,1.91797 -4.21484,4.21484v37.48438c0,2.28906 1.91406,4.20313 4.21484,4.20313h37.48438c2.28516,0 4.19922,-1.91406 4.19922,-4.20312v-37.48437c0,-2.29687 -1.91406,-4.21484 -4.19922,-4.21484zM16.15625,33h-5.35937c-0.78516,-0.02734 -0.96094,-0.69141 -0.57031,-1.26172l5.55078,-10.23828c0.18359,-0.1875 0.18359,-0.46094 0,-0.65625l-3.66016,-6.39062c-0.19531,-0.38281 0,-0.95312 0.38281,-0.95312h5.5c0.19531,0 0.38672,0.04297 0.57813,0.38281l4.08203,7.15625c0.18359,0.1875 0.18359,0.37109 0,0.57031l-5.93359,10.89844c0,0 -0.22656,0.47266 -0.57031,0.49219zM39.48828,8.79688l-10.73828,19.70313c-0.1875,0.19531 -0.1875,0.30469 0,0.5l6.90625,12.30469c0.38281,0.72656 0,1.19531 -0.56641,1.19531h-5.35156c-0.19531,0 -0.3125,-0.13281 -0.58203,-0.61719l-7.26562,-12.88281c-0.13281,-0.14844 -0.12891,-0.32812 0,-0.50781l11.09766,-20.46484c0.22266,-0.42969 0.56641,-0.52734 0.76172,-0.52734h5.25c0.67578,-0.01953 0.78906,0.6875 0.48828,1.29688z"></path></g></g>
              </svg>
            </a>
          </div>
        </div>

        <div class="order-3">
          <h3 class="text-white font-semibold mb-4">Kontakt</h3>
          <div class="space-y-2">
            <div>
              <a @click="navigateToContact()" class="hover:text-white transition-colors cursor-pointer">Kontakt Formular</a>
            </div>
            <div>
              <a href="mailto:info@owl-racing-team.de" class="hover:text-white transition-colors">
                info@owl-racing-team.de
              </a>
            </div>
            <div>
              <a href="tel:+49123456789" class="hover:text-white transition-colors">
                +49 5261 702 2490
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm">
        <p>© 2024 Technische Hochschule Ostwestfalen-Lippe, OWL Racing-Team. Alle Rechte vorbehalten.</p>
      </div>
    </div>
  </div>
</template>