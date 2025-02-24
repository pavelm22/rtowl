<!-- SlideUpTransition.vue -->
<template>
  <div
      :class="[
      'fixed inset-0 pointer-events-none overflow-scroll',
      'top-[var(--header-height)]',
      {'h-[calc(var(--app-height)-var(--header-height))]': isOpen}
    ]"
  >
    <div
        :class="[
        'absolute inset-x-0 bottom-0 bg-white transform transition-transform duration-300 pointer-events-auto overflow-scroll',
        'h-[calc(var(--app-height)-var(--header-height))]',
        isOpen ? 'translate-y-0' : 'translate-y-full'
      ]"
    >
      <slot></slot>
    </div>
  </div>
</template>

<script setup>
defineProps({
  isOpen: {
    type: Boolean,
    required: true
  }
})
</script>