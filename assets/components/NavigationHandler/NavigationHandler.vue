<template>
  <div></div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const props = defineProps({
  activePage: {
    type: String,
    default: ''
  },
  handleMenuClick: {
    type: Function,
    required: true
  }
})

const touchStart = ref(null)
const touchEnd = ref(null)
const minSwipeDistance = 100
const hasNavigated = ref(false)

// Checks if any page is currently active
const isAnyPageActive = () => {
  return props.activePage !== ''
}

// Closes the active page by calling handleMenuClick with the current active page
const closeActivePage = () => {
  if (props.activePage) {
    props.handleMenuClick(props.activePage)
  }
}

// Common navigation logic for swipe and browser button
const handleNavigation = () => {
  if (isAnyPageActive() && !hasNavigated.value) {
    hasNavigated.value = true
    closeActivePage()
    // Reset the flag after a short delay
    setTimeout(() => {
      hasNavigated.value = false
    }, 100)
    return true // Event was handled
  }
  return false // Event not handled
}

// Browser Back-Button Handler
const handlePopState = (event) => {
  if (handleNavigation()) {
    event.preventDefault()
    // Push a new state instead of moving forward
    window.history.pushState(null, '', window.location.href)
  }
}

// Touch Handlers for Swipe
const handleTouchStart = (e) => {
  touchStart.value = {
    x: e.touches[0].clientX,
    y: e.touches[0].clientY
  }
}

const handleTouchEnd = (e) => {
  if (!touchStart.value) return

  touchEnd.value = {
    x: e.changedTouches[0].clientX,
    y: e.changedTouches[0].clientY
  }

  handleSwipe()
}

const handleSwipe = () => {
  const swipeDistance = touchStart.value.x - touchEnd.value.x
  const verticalDistance = Math.abs(touchStart.value.y - touchEnd.value.y)

  // Only consider horizontal swipes
  if (Math.abs(swipeDistance) > verticalDistance &&
      Math.abs(swipeDistance) > minSwipeDistance) {
    // Left to right swipe (back)
    if (swipeDistance < -minSwipeDistance) {
      handleNavigation()
    }
  }
}

onMounted(() => {
  // Push initial state
  window.history.pushState(null, '', window.location.href)
  window.addEventListener('popstate', handlePopState)
  document.addEventListener('touchstart', handleTouchStart)
  document.addEventListener('touchend', handleTouchEnd)
})

onUnmounted(() => {
  window.removeEventListener('popstate', handlePopState)
  document.removeEventListener('touchstart', handleTouchStart)
  document.removeEventListener('touchend', handleTouchEnd)
})
</script>