<script setup>
import {RouterLink} from "vue-router";
</script>

<template>
  <!-- Sidebar -->
  <div class="w-64 bg-[var(--owlrt-black)] text-[var(--owlrt-white)] fixed h-full">
    <!-- Logo -->
    <div class="p-4">
      <img src="https://www.owl-racing-team.de/OWLracing-team_LOGO_wei%C3%9F.png" alt="Logo" class="h-8">
    </div>
    <!-- Navigation -->
    <nav class="mt-4">
      <RouterLink :to="{ name: 'overview' }"
                  class="block py-2 px-4 text-[var(--owlrt-white)] hover:bg-[var(--owlrt-gray)]"
      >
        Dashboard
      </RouterLink>
      <RouterLink :to="{ name: 'dash-team' }"
                  class="block py-2 px-4 text-[var(--owlrt-white)] hover:bg-[var(--owlrt-gray)]"
      >
        Teams
      </RouterLink>
      <RouterLink :to="{ name: 'dash-sponsors' }"
                  class="block py-2 px-4 text-[var(--owlrt-white)] hover:bg-[var(--owlrt-gray)]"
      >
        Sponsors
      </RouterLink>
      <RouterLink :to="{ name: 'team-member' }"
                  class="block py-2 px-4 text-[var(--owlrt-white)] hover:bg-[var(--owlrt-gray)]"
      >
        Team Member
      </RouterLink>
    </nav>
  </div>
</template>

<style scoped>

</style>