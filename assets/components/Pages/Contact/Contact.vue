<script setup>
import SlideUpTransition from "../../SlideUpTransition/SlideUpTransition.vue";
import Footer from "../../Footer/Footer.vue";
import {ref} from 'vue'

const props = defineProps({
  handleMenuClick: {
    type: Function,
    required: true,
  },
  activePage: {
    type: String,
    required: true,
    default: '',
  }
})

const formData = ref({
  name: '',
  email: '',
  reason: '',
  phone: '',
  message: ''
})

const errors = ref({})
const maxLength = 1000

const validateForm = () => {
  errors.value = {}

  if (!formData.value.name) {
    errors.value.name = 'Name ist erforderlich'
  }

  if (!formData.value.email) {
    errors.value.email = 'Email ist erforderlich'
  } else if (!formData.value.email.includes('@')) {
    errors.value.email = 'Ungültige Email-Adresse'
  }

  if (!formData.value.reason) {
    errors.value.reason = 'Bitte wählen Sie einen Kontaktgrund'
  }

  if (!formData.value.message) {
    errors.value.message = 'Nachricht ist erforderlich'
  } else if (formData.value.message.length > maxLength) {
    errors.value.message = `Nachricht darf nicht länger als ${maxLength} Zeichen sein`
  }

  return Object.keys(errors.value).length === 0
}

const handleSubmit = () => {
  if (validateForm()) {
    console.log('Form is valid!', formData.value)
  }
}
</script>

<template>
  <SlideUpTransition :is-open="activePage === 'contact'">
    <div class="container mx-auto px-2 sm:px-4 my-24">
      <div class="mb-12">
        <div class="max-w-2xl mx-auto text-center">
          <h2 class="text-3xl font-bold mb-4">Kontakt</h2>
          <p class="text-lg">Gerne sind wir für sie Telefonisch, per Email oder Formular für sie erreichbar</p>
        </div>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/3 mb-8 md:mb-0">
          <div class="flex flex-col justify-center h-full">
            <div class="flex items-center p-3">
              <div class="bg-black text-red-600 rounded-full p-3 mr-3">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                      d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                </svg>
              </div>
              <div>
                <h6 class="font-bold mb-1">Telefon</h6>
                <p>+49 5261 702 2490</p>
              </div>
            </div>
            <div class="flex items-center p-3">
              <div class="bg-black text-red-600 rounded-full p-3 mr-3">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                      d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                </svg>
              </div>
              <div>
                <h6 class="font-bold mb-1">Email</h6>
                <p>info@owl-racing-team.de</p>
              </div>
            </div>
            <div class="flex items-center p-3">
              <div class="bg-black text-red-600 rounded-full p-3 mr-3">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path
                      d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001m-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282"></path>
                </svg>
              </div>
              <div>
                <h6 class="font-bold mb-1">Ort</h6>
                <p>Innovations Campus Lemgo 32858</p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-5/12 xl:w-1/3">
          <div>
            <form @submit.prevent="handleSubmit" class="max-w-md mx-auto">
              <!-- Name Input -->
              <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name *</label>
                <input
                    v-model="formData.name"
                    type="text"
                    id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
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
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
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
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
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

              <div class="mb-6">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Telefon (Optional)</label>
                <input
                    v-model="formData.phone"
                    type="tel"
                    id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
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
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    :class="{ 'border-red-500': errors.message }"
                    placeholder="Ihre Nachricht..."
                ></textarea>
                <div class="flex justify-between mt-1">
                  <p v-if="errors.message" class="text-sm text-red-600">{{ errors.message }}</p>
                  <p class="text-sm text-gray-500">{{ formData.message.length }}/{{ maxLength }}</p>
                </div>
              </div>

              <button
                  type="submit"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
              >
                Absenden
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <Footer :handleMenuClick="handleMenuClick"/>
  </SlideUpTransition>
</template>

<style scoped>

</style>