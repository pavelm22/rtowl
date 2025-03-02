<!-- PageLayout.vue -->
<template>
  <transition
      name="slide-up"
      @enter="onEnter"
      @after-enter="afterEnter"
      @leave="onLeave">
    <div
        v-if="show"
        class="fixed inset-0 pointer-events-auto overflow-scroll bg-transparent z-5"
        :style="{ top: 'var(--header-height)', height: 'calc(var(--app-height) - var(--header-height))' }">
      <div class="h-full overflow-auto">
        <slot></slot>

        <div class="relative bg-white">
          <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 z-50 pointer-events-auto">
            <button @click="goBack" class="flex gap-2 items-center">
              <div class="p-2 rounded-full justify-center w-10 h-10 border-2 border-red-700 flex items-center gap-1 px-3 py-2 text-black hover:bg-red-100 transition-colors">
                <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.7 15.3l-7-7c-.2-.2-.2-.5 0-.7l7-7c.2-.2.5-.2.7 0 .2.2.2.5 0 .7L5.7 8l6.7 6.3c.2.2.2.5 0 .7-.1.2-.4.2-.7 0z" fill="currentColor"/>
                </svg>
              </div>
              <span class="hover:underline hover:duration-300 decoration-red-800">Zurück</span>
            </button>
          </div>
        </div>

        <slot name="footer"></slot>
      </div>
    </div>
  </transition>
</template>

<script setup>
import { ref, onMounted, computed, watch } from 'vue'
import { useRouter, useRoute } from 'vue-router'

const props = defineProps({
  show: {
    type: Boolean,
    default: false
  }
})

const router = useRouter()
const route = useRoute()

const goBack = () => {
  router.push('/')
}

const onEnter = (el) => {
  el.style.transform = 'translateY(100%)'
  // Force reflow
  void el.offsetWidth
  el.style.transition = 'transform 300ms ease-out'
  el.style.transform = 'translateY(0)'
}

const afterEnter = (el) => {
  el.style.transition = ''
}

const onLeave = (el) => {
  el.style.transition = 'transform 300ms ease-in'
  el.style.transform = 'translateY(100%)'
}
</script>

<style scoped>
/* Base styles for transitions */
.slide-up-enter-active,
.slide-up-leave-active {
  transition: transform 0.3s ease;
}

.slide-up-enter-from,
.slide-up-leave-to {
  transform: translateY(100%);
}
</style>