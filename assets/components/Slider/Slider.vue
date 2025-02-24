<template>
  <div class="relative w-full overflow-hidden">
    <!-- Slider Container -->
    <div
        class="flex transition-transform duration-500 ease-in-out h-full"
        :style="{ transform: `translateX(-${currentIndex * 100}%)` }"
    >
      <!-- Slider Items -->
      <div
          v-for="(slide, index) in slides"
          :key="index"
          class="w-full h-full flex-shrink-0"
      >
        <img
            :src="slide.image"
            :alt="slide.title"
            class="w-full h-full object-cover"
        />
        <div class="absolute bottom-0 left-0 right-0 p-4 bg-black bg-opacity-50">
          <h3 class="text-white text-xl font-bold">{{ slide.title }}</h3>
          <p class="text-white">{{ slide.description }}</p>
        </div>
      </div>
    </div>

    <!-- Navigation Buttons -->
    <button
        @click="prevSlide"
        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 rounded-full p-2 transition-all"
    >
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <button
        @click="nextSlide"
        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 rounded-full p-2 transition-all"
    >
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </button>

    <!-- Dots Navigation -->
    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
      <button
          v-for="(_, index) in slides"
          :key="index"
          @click="goToSlide(index)"
          class="w-3 h-3 rounded-full transition-all"
          :class="currentIndex === index ? 'bg-white' : 'bg-white bg-opacity-50'"
      ></button>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'

// Props definition
const props = defineProps({
  slides: {
    type: Array,
    required: true,
    default: () => ([
      {
        image: 'https://www.mechatronik.de/fileadmin/doc/verkauf/fahrzeugvermarktung/Nissan_GTR/3__Large_.jpg',
        title: 'Slide 1',
        description: 'Description for slide 1'
      },
      {
        image: 'https://www.mechatronik.de/fileadmin/doc/verkauf/fahrzeugvermarktung/Nissan_GTR/3__Large_.jpg',
        title: 'Slide 2',
        description: 'Description for slide 2'
      },
      {
        image: 'https://www.mechatronik.de/fileadmin/doc/verkauf/fahrzeugvermarktung/Nissan_GTR/3__Large_.jpg',
        title: 'Slide 3',
        description: 'Description for slide 3'
      }
    ])
  },
  autoplay: {
    type: Boolean,
    default: true
  },
  interval: {
    type: Number,
    default: 5000
  }
})

const currentIndex = ref(0)
let autoplayInterval = null

// Navigation methods
const nextSlide = () => {
  currentIndex.value = (currentIndex.value + 1) % props.slides.length
}

const prevSlide = () => {
  currentIndex.value = currentIndex.value === 0
      ? props.slides.length - 1
      : currentIndex.value - 1
}

const goToSlide = (index) => {
  currentIndex.value = index
}

// Autoplay functionality
const startAutoplay = () => {
  if (props.autoplay) {
    autoplayInterval = setInterval(nextSlide, props.interval)
  }
}

const stopAutoplay = () => {
  if (autoplayInterval) {
    clearInterval(autoplayInterval)
  }
}

// Lifecycle hooks
onMounted(() => {
  startAutoplay()
})

onBeforeUnmount(() => {
  stopAutoplay()
})
</script>