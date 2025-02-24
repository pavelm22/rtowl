<script setup>
const props = defineProps({
  handleMenuClick: {
    type: Function,
    required: true
  },
  headline: {
    type: String,
    default: "Du möchtest das Team unterstützen?",
  },
  text: {
    type: String,
    default: "Gerne nehmen wir Kontakt mit dir auf, fülle bitte das Kontaktformular aus.",
  },
  buttonText: {
    type: String,
    default: "Kontakt",
  },
  buttonLink: {
    type: String,
    default: "contact",
  }
})
</script>

<template>
  <hr>
  <section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-sm text-center">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight">{{ headline }}</h2>
        <p class="mb-6 font-light md:text-lg">{{ text }}</p>
        <a @click="handleMenuClick(buttonLink)" class="transition-colors text-center duration-300 bg-black hover:bg-neutral-800 border-2 border-red-500 rounded font-bold text-white p-3 cursor-pointer w-full sm:w-64 md:w-56 lg:w-64">{{ buttonText}}</a>
      </div>
    </div>
  </section>
</template>

<style scoped>

</style>