<template>
  <div class="fixed bottom-0 left-0 right-0 p-4 bg-white/80 backdrop-blur-sm">
    <div class="container mx-auto flex justify-end gap-8">
      <button @click="$emit('toggle-orbit')">Toggle Orbit</button>
      <button @click="$emit('toggle-menu')">Toggle Menu</button>/
    </div>
  </div>
</template>

<script>
export default {
  name: 'BottomButtonContainer',
  props: {
  },
  emits: ['toggle-menu', 'toggle-orbit']
}
</script>