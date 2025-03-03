<template>
  <div>
    <svg
        class="hamburger-icon"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 10 10"
        stroke="#eee"
        stroke-width=".6"
        fill="rgba(0,0,0,0)"
        stroke-linecap="round"
        style="cursor: pointer"
        @click="toggleAnimation"
        ref="svgRef"
    >
      <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
        <animate
            ref="animateToX"
            dur="0.2s"
            attributeName="d"
            values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7"
            fill="freeze"
            begin="start.begin"
        />
        <animate
            ref="animateToMenu"
            dur="0.2s"
            attributeName="d"
            values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7"
            fill="freeze"
            begin="reverse.begin"
        />
      </path>
      <rect width="10" height="10" stroke="none">
        <animate dur="2s" id="reverse" attributeName="width" begin="click" />
      </rect>
      <rect width="10" height="10" stroke="none">
        <animate dur="0.001s" id="start" attributeName="width" values="10;0" fill="freeze" begin="click" />
        <animate dur="0.001s" attributeName="width" values="0;10" fill="freeze" begin="reverse.begin" />
      </rect>
    </svg>
  </div>
</template>

<script>
export default {
  name: 'HamburgerIcon',

  data() {
    return {
      isOpen: false
    }
  },

  methods: {
    toggleAnimation() {
      this.isOpen = !this.isOpen;

      // Manuelles Auslösen der Animation basierend auf dem Status
      // Emittet ein Ereignis, um Elternkomponenten über den Status zu informieren
      this.$emit('toggle', this.isOpen);
    }
  }
}
</script>

<style scoped>
.hamburger-icon {
  width: 24px;
  height: 24px;
  transition: transform 0.3s ease;
}
</style>