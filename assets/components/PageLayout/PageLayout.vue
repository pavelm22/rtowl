<template>
  <transition
      name="slide-up"
      @enter="onEnter"
      @after-enter="afterEnter"
      @leave="onLeave"
      @after-leave="afterLeave"
      css={false}>
    <div
        v-if="show"
        ref="container"
        class="fixed inset-0 z-20 bg-white/5 backdrop-blur-[0.5px]"
        :style="containerStyle">
      <div class="h-full overflow-y-auto overscroll-contain will-change-transform">
        <slot></slot>

        <div class="relative bg-white">
          <div class="sticky bottom-0 left-0 right-0 flex justify-center p-4 z-50 pointer-events-auto bg-gradient-to-t from-white via-white/90 to-transparent pt-16">
            <button @click="goBack" class="flex gap-2 items-center group">
              <div class="p-2 rounded-full justify-center w-10 h-10 border-2 border-red-700 flex items-center gap-1 px-3 py-2 text-black group-hover:bg-red-100 transition-colors duration-200">
                <svg class="w-4 h-4 transition-transform group-hover:-translate-x-0.5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.7 15.3l-7-7c-.2-.2-.2-.5 0-.7l7-7c.2-.2.5-.2.7 0 .2.2.2.5 0 .7L5.7 8l6.7 6.3c.2.2.2.5 0 .7-.1.2-.4.2-.7 0z" fill="currentColor"/>
                </svg>
              </div>
              <span class="hover:underline decoration-red-800 decoration-2 underline-offset-4 transition-all duration-200">Zurück</span>
            </button>
          </div>
        </div>

        <slot name="footer"></slot>
      </div>
    </div>
  </transition>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useRouter } from 'vue-router'

const props = defineProps({
  show: Boolean
})

const container = ref(null)
const router = useRouter()

const containerStyle = computed(() => ({
  top: 'var(--header-height)',
  height: 'calc(var(--app-height) - var(--header-height))',
  '--enter-easing': 'cubic-bezier(0.16, 1, 0.3, 1)',
  '--leave-easing': 'cubic-bezier(0.7, 0, 0.84, 0)'
}))

const goBack = () => router.push('/')

const onEnter = (el) => {
  el.style.willChange = 'transform'
  el.style.transform = 'translateY(100%)'

  requestAnimationFrame(() => {
    el.style.transition = 'transform 300ms var(--enter-easing)'
    el.style.transform = 'translateY(0)'
  })
}

const afterEnter = (el) => {
  el.style.willChange = ''
  el.style.transition = ''
}

const onLeave = (el) => {
  el.style.willChange = 'transform'
  el.style.transition = 'transform 300ms var(--leave-easing)'
  requestAnimationFrame(() => {
    el.style.transform = 'translateY(100%)'
  })
}

const afterLeave = (el) => {
  el.style.willChange = ''
}
</script>