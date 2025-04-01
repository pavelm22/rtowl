<template>
  <!-- Modal Trigger Slot -->
  <slot name="trigger" :openModal="openModal">
    <button
        @click="openModal"
        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"
    >
      Modal öffnen
    </button>
  </slot>

  <!-- Modal -->
  <div
      v-if="isOpen"
      class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50"
      @click.self="closeModal"
  >
    <div
        class="relative top-20 mx-auto p-5 border w-full max-w-md shadow-lg rounded-md bg-white"
        :class="modalClass"
    >
      <!-- Modal Header -->
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold text-gray-800">
          <slot name="title">{{ title }}</slot>
        </h3>
        <button
            @click="closeModal"
            class="text-gray-500 hover:text-gray-700"
        >
          <span class="text-2xl">&times;</span>
        </button>
      </div>

      <!-- Modal Content -->
      <div class="mb-4">
        <slot name="content">
          <!-- Dynamic Form -->
          <form @submit.prevent="handleSubmit">
            <div
                v-for="(field, index) in formFields"
                :key="index"
                class="mb-4"
            >
              <label
                  :for="field.id"
                  class="block text-gray-700 text-sm font-bold mb-2"
              >
                {{ field.label }}:
              </label>

              <input
                  v-if="field.type !== 'textarea'"
                  :type="field.type"
                  :id="field.id"
                  v-model="formData[field.model]"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  :placeholder="field.placeholder || ''"
                  :required="field.required || false"
              >

              <textarea
                  v-else
                  :id="field.id"
                  v-model="formData[field.model]"
                  :rows="field.rows || 4"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  :placeholder="field.placeholder || ''"
                  :required="field.required || false"
              ></textarea>
            </div>

            <div class="flex items-center justify-end gap-2">
              <button
                  type="button"
                  @click="closeModal"
                  class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              >
                Abbrechen
              </button>
              <slot name="submit-button">
                <button
                    type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                >
                  Absenden
                </button>
              </slot>
            </div>
          </form>
        </slot>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, watch } from 'vue'

const props = defineProps({
  // Modal properties
  title: {
    type: String,
    default: 'Formular'
  },
  modalClass: {
    type: String,
    default: ''
  },

  // Form properties
  formFields: {
    type: Array,
    default: () => [
      {
        id: 'name',
        label: 'Name',
        type: 'text',
        model: 'name',
        placeholder: 'Ihr Name',
        required: true
      },
      {
        id: 'email',
        label: 'Email',
        type: 'email',
        model: 'email',
        placeholder: 'Ihre Email',
        required: true
      },
      {
        id: 'message',
        label: 'Nachricht',
        type: 'textarea',
        model: 'message',
        placeholder: 'Ihre Nachricht',
        required: false
      }
    ]
  },
  initialFormData: {
    type: Object,
    default: () => ({})
  }
})

const emit = defineEmits(['submit', 'open', 'close'])

const isOpen = ref(false)
const formData = reactive({})

// Initialize form data
watch(() => props.formFields, (fields) => {
  fields.forEach(field => {
    if (!formData.hasOwnProperty(field.model)) {
      formData[field.model] = props.initialFormData[field.model] || ''
    }
  })
}, { immediate: true })

const openModal = () => {
  isOpen.value = true
  emit('open')
}

const closeModal = () => {
  isOpen.value = false
  emit('close')
}

const handleSubmit = () => {
  emit('submit', formData)
  closeModal()
}
</script>