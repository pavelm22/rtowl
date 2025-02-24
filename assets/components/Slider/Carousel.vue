<template>
  <div class="relative w-full h-64 overflow-hidden">
    <!-- Container mit Animation -->
    <div class="flex animate-slide absolute">
      <!-- Team Member Cards -->
      <div class="flex-shrink-0 w-64 h-64 bg-white rounded-lg shadow-lg p-4 mx-2">
        <img src="/api/placeholder/100/100" alt="Team Member 1" class="w-24 h-24 rounded-full mx-auto mb-4">
        <h3 class="text-xl font-bold text-center mb-2">Sarah Miller</h3>
        <p class="text-gray-600 text-center">Product Manager</p>
      </div>

      <!-- Statistik Card -->
      <div class="flex-shrink-0 w-64 h-64 bg-blue-500 text-white rounded-lg shadow-lg p-4 mx-2">
        <div class="flex flex-col items-center justify-center h-full">
          <span class="text-4xl font-bold mb-2">250+</span>
          <p class="text-center">Erfolgreich abgeschlossene Projekte</p>
        </div>
      </div>

      <!-- Team Member Cards -->
      <div class="flex-shrink-0 w-64 h-64 bg-white rounded-lg shadow-lg p-4 mx-2">
        <img src="/api/placeholder/100/100" alt="Team Member 2" class="w-24 h-24 rounded-full mx-auto mb-4">
        <h3 class="text-xl font-bold text-center mb-2">John Davis</h3>
        <p class="text-gray-600 text-center">Senior Developer</p>
      </div>

      <!-- Statistik Card -->
      <div class="flex-shrink-0 w-64 h-64 bg-green-500 text-white rounded-lg shadow-lg p-4 mx-2">
        <div class="flex flex-col items-center justify-center h-full">
          <span class="text-4xl font-bold mb-2">98%</span>
          <p class="text-center">Kundenzufriedenheit</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'TeamSlider'
}
</script>

<style>
@keyframes slide {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-100%);
  }
}

.animate-slide {
  animation: slide 20s linear infinite;
}
</style>