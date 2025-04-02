<script setup>
import Menu from "@/components/Menu/Menu.vue";

const props = defineProps(
    {
      handleOrbitToggle: {
        type: Function,
        required: true
      }
    }
)
</script>

<template>
  <Menu
      @toggle-orbit="handleOrbitToggle"
  />
</template>

<style scoped>

</style>