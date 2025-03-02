<template>
  <PageLayout :show="true">
    <!-- Hero Section - Similar to About-US -->
    <section class="relative">
      <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent"></div>
      </div>
      <div class="max-w-screen-xl px-4 py-32 mx-auto flex flex-col items-start text-left lg:py-48 relative z-10">
        <span class="inline-block py-1 px-3 mb-4 bg-red-600 text-black font-bold text-xs uppercase tracking-widest">OWL Racing Team</span>
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
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Kontakt</span>
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
                <div class="bg-black text-red-600 rounded-full p-3 mr-4 flex-shrink-0">
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-lg mb-1">Telefon</h4>
                  <p class="text-gray-700">+49 5261 702 2490</p>
                </div>
              </div>

              <div class="flex items-center">
                <div class="bg-black text-red-600 rounded-full p-3 mr-4 flex-shrink-0">
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-lg mb-1">Email</h4>
                  <p class="text-gray-700">info@owl-racing-team.de</p>
                </div>
              </div>

              <div class="flex items-center">
                <div class="bg-black text-red-600 rounded-full p-3 mr-4 flex-shrink-0">
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001m-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282"></path>
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-lg mb-1">Ort</h4>
                  <p class="text-gray-700">Innovations Campus Lemgo 32858</p>
                </div>
              </div>
            </div>

            <!-- Social Media Links could go here -->
            <div class="mt-10">
              <h4 class="font-bold text-lg mb-4">Folgen Sie uns</h4>
              <div class="flex space-x-4">
                <!-- Social icons here -->
                <a href="#" class="bg-black text-red-600 p-3 rounded-full hover:bg-red-600 hover:text-black transition-colors duration-300">
                  <!-- Facebook SVG icon -->
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"/>
                  </svg>
                </a>
                <a href="#" class="bg-black text-red-600 p-3 rounded-full hover:bg-red-600 hover:text-black transition-colors duration-300">
                  <!-- Instagram SVG icon -->
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.332.014 7.052.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                  </svg>
                </a>
                <a href="#" class="bg-black text-red-600 p-3 rounded-full hover:bg-red-600 hover:text-black transition-colors duration-300">
                  <!-- Twitter/X SVG icon -->
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.599-.1-.899a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-2xl font-bold mb-6">Kontaktformular</h3>
            <form @submit.prevent="handleSubmit">
              <!-- Name Input -->
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
                <p v-if="errors.name" class="mt-2 text-sm text-red-600">{{ errors.name }}</p>
              </div>

              <!-- Email Input -->
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
                <p v-if="errors.email" class="mt-2 text-sm text-red-600">{{ errors.email }}</p>
              </div>

              <!-- Reason Select -->
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
                <p v-if="errors.reason" class="mt-2 text-sm text-red-600">{{ errors.reason }}</p>
              </div>

              <!-- Phone Input (Optional) -->
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

              <!-- Message Textarea -->
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
                  <p v-if="errors.message" class="text-sm text-red-600">{{ errors.message }}</p>
                  <p class="text-sm text-gray-500">{{ formData.message.length }}/{{ maxLength }}</p>
                </div>
              </div>

              <!-- Submit Button -->
              <button
                  type="submit"
                  class="text-black bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors duration-300"
              >
                Nachricht senden
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 lg:py-24 bg-gray-100">
      <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
          <span class="text-sm font-bold text-red-600 uppercase tracking-wider">Standort</span>
          <h2 class="mt-2 text-3xl font-bold md:text-4xl">BESUCHEN SIE UNS</h2>
          <p class="mt-4 text-gray-700 max-w-2xl mx-auto">
            Wir freuen uns über Ihren Besuch in unserem Innovations Campus in Lemgo.
          </p>
        </div>

        <!-- OpenStreetMap mit Leaflet -->
        <div class="w-full h-96 bg-gray-200 rounded-lg overflow-hidden">
          <div id="map" ref="mapContainer" class="w-full h-full"></div>
        </div>

        <!-- Adresse unter der Karte -->
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

// Reaktive Variablen
const mapContainer = ref(null);
let map = null;
let marker = null;

const lat = 52.01764862873168;
const lng = 8.90675957115005;
const address = 'Campusallee 6, 32657 Lemgo';
const phoneNumber = '+49 (0) 5261 / 123456';

// Methoden
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

// Lebenszyklus-Hooks
onMounted(() => {
  initMap();
});

onBeforeUnmount(() => {
  // Clean up the map instance when component is destroyed
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
    // Here you would typically send the form data to your backend
  }
};
</script>

<style scoped>
/* Add any specific styles here if needed */
</style>