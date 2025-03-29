<template>
  <PageLayout :show="true">
    <!-- Hero Section - Similar to About-US -->
    <section class="relative">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent"></div>
      </div>
      <div class="max-w-screen-xl px-4 py-32 mx-auto flex flex-col items-start text-left lg:py-48 relative z-10">
        <span class="inline-block py-1 px-3 mb-4 bg-red-700 text-black font-bold text-xs uppercase tracking-widest">OWL Racing Team</span>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">KONTAKT</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 max-w-lg">
          Gerne sind wir für Sie telefonisch, per Email oder über unser Kontaktformular erreichbar.
          Wir freuen uns auf Ihre Nachricht.
        </p>
      </div>
    </section>

    <!-- Contact Information & Form Section -->
    <section class="py-16 lg:py-24 bg-white">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-700 uppercase tracking-wider">Kontakt</span>
          <h2 class="mt-2 text-3xl font-bold md:text-4xl">SPRECHEN SIE UNS AN</h2>
          <p class="mt-4 text-gray-700 max-w-2xl mx-auto">
            Haben Sie Fragen oder Anregungen? Wir freuen uns auf Ihre Nachricht und melden uns schnellstmöglich bei Ihnen zurück.
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-start">
          <!-- Contact Information -->
          <div class="bg-gray-100 p-8 rounded-lg">
            <h3 class="text-2xl font-bold mb-6">Kontaktdaten</h3>

            <div class="space-y-6">
              <div class="flex items-center">
                <div class="bg-black text-red-700 rounded-full p-3 mr-4 flex-shrink-0">
                  <PhoneIcon />
                </div>
                <div>
                  <h4 class="font-bold text-lg mb-1">Telefon</h4>
                  <p class="text-gray-700">+49 5261 702 2490</p>
                </div>
              </div>

              <div class="flex items-center">
                <div class="bg-black text-red-700 rounded-full p-3 mr-4 flex-shrink-0">
                  <EmailIcon />
                </div>
                <div>
                  <h4 class="font-bold text-lg mb-1">Email</h4>
                  <p class="text-gray-700">info@owl-racing-team.de</p>
                </div>
              </div>

              <div class="flex items-center">
                <div class="bg-black text-red-700 rounded-full p-3 mr-4 flex-shrink-0">
                  <LocationIcon />
                </div>
                <div>
                  <h4 class="font-bold text-lg mb-1">Ort</h4>
                  <p class="text-gray-700">Innovations Campus Lemgo 32858</p>
                </div>
              </div>
            </div>

            <div class="mt-10">
              <h4 class="font-bold text-lg mb-4">Folgen Sie uns</h4>
              <div class="flex space-x-4">
                <a href="#" class="bg-black text-red-700 p-3 rounded-full hover:bg-red-600 hover:text-black transition-colors duration-300">
                  <FacebookIcon />
                </a>
                <a href="#" class="bg-black text-red-700 p-3 rounded-full hover:bg-red-600 hover:text-black transition-colors duration-300">
                  <!-- Instagram SVG icon -->
                  <InstagramIcon  />
                </a>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-2xl font-bold mb-6">Kontaktformular</h3>
            <form @submit.prevent="handleSubmit">
              <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name *</label>
                <input
                    v-model="formData.name"
                    type="text"
                    id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    :class="{ 'border-red-500': errors.name }"
                    placeholder="Max Mustermann"
                >
                <p v-if="errors.name" class="mt-2 text-sm text-red-700">{{ errors.name }}</p>
              </div>

              <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email *</label>
                <input
                    v-model="formData.email"
                    type="email"
                    id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    :class="{ 'border-red-500': errors.email }"
                    placeholder="name@company.com"
                >
                <p v-if="errors.email" class="mt-2 text-sm text-red-700">{{ errors.email }}</p>
              </div>

              <div class="mb-6">
                <label for="reason" class="block mb-2 text-sm font-medium text-gray-900">Kontaktgrund *</label>
                <select
                    v-model="formData.reason"
                    id="reason"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    :class="{ 'border-red-500': errors.reason }"
                >
                  <option value="">Bitte wählen</option>
                  <option value="general">Allgemeine Anfrage</option>
                  <option value="support">Technischer Support</option>
                  <option value="feedback">Feedback</option>
                  <option value="other">Sonstiges</option>
                </select>
                <p v-if="errors.reason" class="mt-2 text-sm text-red-700">{{ errors.reason }}</p>
              </div>

              <div class="mb-6">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Telefon (Optional)</label>
                <input
                    v-model="formData.phone"
                    type="tel"
                    id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="+49 123 45678900"
                >
              </div>

              <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Nachricht *</label>
                <textarea
                    v-model="formData.message"
                    id="message"
                    rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500"
                    :class="{ 'border-red-500': errors.message }"
                    placeholder="Ihre Nachricht..."
                ></textarea>
                <div class="flex justify-between mt-1">
                  <p v-if="errors.message" class="text-sm text-red-700">{{ errors.message }}</p>
                  <p class="text-sm text-gray-500">{{ formData.message.length }}/{{ maxLength }}</p>
                </div>
              </div>

              <a
                  href="#"
                  class="inline-flex items-center justify-center px-5 py-3 text-base font-bold bg-black text-white border-2 border-red-700 hover:bg-red-600 hover:text-black rounded-lg transition-colors duration-300"
              >
                Nachricht senden
              </a>

            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 lg:py-24 bg-gray-100">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-700 uppercase tracking-wider">Standort</span>
          <h2 class="mt-2 text-3xl font-bold md:text-4xl">BESUCHEN SIE UNS</h2>
          <p class="mt-4 text-gray-700 max-w-2xl mx-auto">
            Wir freuen uns über Ihren Besuch in unserem Innovations Campus in Lemgo.
          </p>
        </div>

        <div class="w-full h-96 bg-gray-200 rounded-lg overflow-hidden">
          <div id="map" ref="mapContainer" class="w-full h-full"></div>
        </div>

        <div class="mt-8 text-center">
          <h3 class="text-xl font-semibold">Innovation Campus Lemgo</h3>
          <p class="mt-2">{{ address }}</p>
          <p class="mt-1">Tel: {{ phoneNumber }}</p>
        </div>
      </div>
    </section>

    <template #footer>
      <Footer />
    </template>
  </PageLayout>
</template>

<script setup>
import Footer from "../../Footer/Footer.vue";
import PageLayout from "@/components/PageLayout/PageLayout.vue";
import { ref, onMounted, onBeforeUnmount } from 'vue';
import PhoneIcon from "@/components/Icons/PhoneIcon.vue";
import EmailIcon from "@/components/Icons/EmailIcon.vue";
import LocationIcon from "@/components/Icons/LocationIcon.vue";
import FacebookIcon from "@/components/Icons/FacebookIcon.vue";
import InstagramIcon from "@/components/Icons/InstagramIcon.vue";

const mapContainer = ref(null);
let map = null;
let marker = null;

const lat = 52.01764862873168;
const lng = 8.90675957115005;
const address = 'Campusallee 6, 32657 Lemgo';
const phoneNumber = '+49 (0) 5261 / 123456';

const createMap = () => {
  // Initialize the map
  map = L.map(mapContainer.value).setView([lat, lng], 15);

  // Add OpenStreetMap tiles
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // Add marker for the location
  marker = L.marker([lat, lng]).addTo(map);

  // Add popup to the marker
  marker.bindPopup(`<b>Innovation Campus Lemgo</b><br>${address}`).openPopup();
};

const initMap = () => {
  // Ensure Leaflet is loaded
  if (typeof L !== 'undefined') {
    createMap();
  } else {
    // Load Leaflet CSS
    const leafletCss = document.createElement('link');
    leafletCss.rel = 'stylesheet';
    leafletCss.href = 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.min.css';
    document.head.appendChild(leafletCss);

    // Load Leaflet JS
    const leafletScript = document.createElement('script');
    leafletScript.src = 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.min.js';
    leafletScript.onload = () => createMap();
    document.head.appendChild(leafletScript);
  }
};

onMounted(() => {
  initMap();
});

onBeforeUnmount(() => {
  if (map) {
    map.remove();
  }
});
const formData = ref({
  name: '',
  email: '',
  reason: '',
  phone: '',
  message: ''
});

const errors = ref({});
const maxLength = 1000;

const validateForm = () => {
  errors.value = {};

  if (!formData.value.name) {
    errors.value.name = 'Name ist erforderlich';
  }

  if (!formData.value.email) {
    errors.value.email = 'Email ist erforderlich';
  } else if (!formData.value.email.includes('@')) {
    errors.value.email = 'Ungültige Email-Adresse';
  }

  if (!formData.value.reason) {
    errors.value.reason = 'Bitte wählen Sie einen Kontaktgrund';
  }

  if (!formData.value.message) {
    errors.value.message = 'Nachricht ist erforderlich';
  } else if (formData.value.message.length > maxLength) {
    errors.value.message = `Nachricht darf nicht länger als ${maxLength} Zeichen sein`;
  }

  return Object.keys(errors.value).length === 0;
};

const handleSubmit = () => {
  if (validateForm()) {
    console.log('Form is valid!', formData.value);
  }
};
</script>