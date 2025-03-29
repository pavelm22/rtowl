<script setup>
const props = defineProps({
  buttonText: {
    type: String,
    required: true,
  },
  clickFunction: {
    type: Function,
    required: true,
  }
})
</script>

<template>
  <button
      class="inline-flex items-center justify-center px-5 py-3 text-base font-bold text-white bg-black border-2 border-red-600 hover:bg-red-700 rounded-lg transition-colors duration-300"
      @click="handleMenuClick('contact')"
  >
    Contact
    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
    </svg>
  </button>
</template>

<style scoped>

</style>