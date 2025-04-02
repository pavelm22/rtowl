<script setup>
import Nav from "@/components/Dashboard/Navigation/Nav.vue";
import {RouterView} from "vue-router";
</script>

<template>
  <div class="flex h-screen">
    <Nav />
    <div class="flex-1 bg-[var(--owlrt-white)] ml-64">
      <RouterView> </RouterView>
    </div>
  </div>
</template>

<style scoped>

</style>