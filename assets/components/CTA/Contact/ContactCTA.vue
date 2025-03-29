<script setup>
const props = defineProps({
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
    default: "/contact",
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
        <a :href="buttonLink" class="inline-flex items-center justify-center px-5 py-3 text-base font-bold bg-black text-white border-2 border-red-600 hover:bg-red-600 hover:text-black rounded-lg transition-colors duration-300">{{ buttonText}}</a>
      </div>
    </div>
  </section>
</template>

<style scoped>

</style>