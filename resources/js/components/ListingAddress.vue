<script setup>
defineProps({
    listing:Object
})</script>
<template>
  <span>   {{ listing.baths }}, {{ listing.beds }}, {{ listing.city }},
    {{ listing.state }}, {{ listing.address }},
    ₨: {{ listing.address_line }}
  </span>
</template>
