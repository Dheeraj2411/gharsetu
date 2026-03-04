<script setup>
import FlashToast from '@/components/FlashToast.vue';

import { Link } from '@inertiajs/vue3'


</script>

<template>
    <div class="bg-amber-200 h-2">

        <FlashToast/>
    </div>

  <div>MainLayout</div>

  <Link href="/listing/create">create</Link>

  <slot></slot>
</template>

