<template>
  <section class="relative">
    <div class="max-w-screen-xl px-4 py-32 mx-auto flex flex-col items-start text-left lg:py-48 relative">
      <span class="inline-block py-1 px-3 mb-4 bg-red-700 text-black font-bold text-xs uppercase tracking-widest">{{ badge }}</span>
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl" v-html="formattedHeadline"></h1>
      <p class="mb-8 text-lg font-normal text-gray-300 max-w-lg">{{ description }}</p>
      <a v-if="buttonLink" :href="buttonLink" class="inline-flex items-center justify-center px-5 py-3 text-base font-bold bg-black text-white border-2 border-red-700 hover:bg-red-600 hover:text-black rounded-lg transition-colors duration-300">
        {{ buttonText }} <ArrowIcon />
      </a>
    </div>
  </section>
</template>
<script>
export default {
  name: 'HeroSection',
  components: {
    ArrowIcon: {
      render() {
        return h('svg', {
          xmlns: 'http://www.w3.org/2000/svg',
          class: 'h-5 w-5 ml-2',
          fill: 'none',
          viewBox: '0 0 24 24',
          stroke: 'currentColor'
        }, [
          h('path', {
            'stroke-linecap': 'round',
            'stroke-linejoin': 'round',
            'stroke-width': '2',
            d: 'M14 5l7 7m0 0l-7 7m7-7H3'
          })
        ]);
      }
    }
  },
  props: {
    badge: {
      type: String,
      default: 'Formula Student Racing Club'
    },
    headline: {
      type: String,
      default: 'ENGINEERING\nTHE FUTURE\nOF RACING'
    },
    description: {
      type: String,
      default: 'A team of passionate engineering students dedicated to designing, building, and racing formula-style vehicles in international competitions.'
    },
    buttonText: {
      type: String,
      required: false,
      default: null
    },
    buttonLink: {
      type: String,
      required: false,
      default: null
    }
  },
  computed: {
    formattedHeadline() {
      return this.headline.replace(/\n/g, '<br>');
    }
  }
}
</script>