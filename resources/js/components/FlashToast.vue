<script setup>
import { usePage } from '@inertiajs/vue3'
import { watchEffect } from 'vue'
import { ref,  } from 'vue'

const page = usePage()
const show = ref(false)
const message = ref('')

watchEffect(() => {
  if (page.props.flash.success) {
    show.value = true
    message.value = page.props.flash.success
  }


      setTimeout(() => {
        show.value = false
      }, 3000)
    }

)
</script>

<template>
  <transition name="toast">
    <div v-if="show" class="toast">
      {{ message }}
      <div>sfkfjdkdf</div>
    </div>
  </transition>
</template>

<style scoped>
.toast {
  position: fixed;
  top: 20px;
  right: 20px;
  background: #22c55e;
  color: white;
  padding: 12px 20px;
  border-radius: 6px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

/* Animation */
.toast-enter-active,
.toast-leave-active {
  transition: all 0.4s ease;
}

.toast-enter-from {
  opacity: 0;
  transform: translateX(100%);
}

.toast-leave-to {
  opacity: 0;
  transform: translateX(100%);
}
</style>
