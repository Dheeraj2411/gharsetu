<script setup>
defineProps({
    listings: Array,
});
{
    ("beds",
        "baths",
        "area",
        "city",
        "state",
        "pincode",
        "address",
        "address_line",
        "price",
        "property_type",
        "listing_type",
        "is_featured");
}
</script>

<template>
  <div v-for="listing in listings" :key="listing.id">
    {{ listing.baths }}, {{ listing.beds }}, {{ listing.city }},
    {{ listing.state }}, {{ listing.address }},
    {{ listing.address_line }}
  </div>
</template>
