<template>
  <div class="absolute z-20">
    <div class="fixed top-0 w-full transition-all duration-700"
            :class="{ 'h-screen': !isSmall, 'h-20': isSmall }"
            style="background-color: #000000;"
    >
      <nav class="h-full flex items-center justify-center">
        <div class="container mx-auto flex flex-col items-center">
          <img src="../../assets/img/OWL_LogoWH.png" alt="Logo"
               class="transition-all duration-700"
               :style="{ height: isSmall ? '5rem' : '200px' }">
          <div v-if="isLoading" class="mt-8 transition-opacity duration-300" style="width: 300px;">
            <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
              <div class="h-full bg-white transition-all duration-300 rounded-full"
                   :style="{ width: `${loadingProgress}%` }"></div>
            </div>
            <div class="text-white mt-4 text-center">
              {{ isLoading ? `${Math.round(loadingProgress)}% Geladen` : 'Fertig geladen' }}
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</template>

<script setup>
import { ref, watch, computed, onMounted } from 'vue';

const props = defineProps({
  loadingProgress: {
    type: Number,
    required: true,
    default: 0,
  },
});

const isSmall = ref(false);
const isLoading = ref(true);
const loadingComplete = computed(() => props.loadingProgress === 100);

// Emit Event wenn Header Status sich ändert
const emit = defineEmits(['headerStateChange']);

watch(loadingComplete, (newValue) => {
  if (newValue) {
    setTimeout(() => {
      isLoading.value = false;
      isSmall.value = true;
      // Emit Event wenn Header klein wird
      emit('headerStateChange', true);
    }, 1200);
  }
});

onMounted(() => {
  // Initial Event emit
  emit('headerStateChange', false);
});
</script>