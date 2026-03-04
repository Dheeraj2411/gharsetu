<script setup>
import { useForm } from '@inertiajs/vue3';
{ 'beds',
            'baths',
            'area',
            'city',
            'state',
            'pincode',
            'address',
            'address_line',
            'price',
            'property_type',
            'listing_type',
            'is_featured'}

const form = useForm({
  beds: '',
  baths: '',
  area: '',
  city: '',
  state: '',
  pincode: '',
  address: '',
  address_line: '',
  price: '',
  property_type: '',
  listing_type: '',
  is_featured: false,
})
const create = () => form.post('/listing')
</script>
<template>
  <form @submit.prevent="create">
    <div>

      <div>
        <label>Beds</label>
        <input v-model.number="form.beds" type="number" />
      </div>

      <div>
        <label>Baths</label>
        <input v-model.number="form.baths" type="number" />
      </div>

      <div>
        <label>Area (sqft)</label>
        <input v-model.number="form.area" type="number" />
      </div>

      <div>
        <label>City</label>
        <input v-model="form.city" type="text" />
      </div>

      <div>
        <label>State</label>
        <input v-model="form.state" type="text" />
      </div>

      <div>
        <label>Pincode</label>
        <input v-model="form.pincode" type="text" />
      </div>

      <div>
        <label>Address</label>
        <input v-model="form.address" type="text" />
      </div>

      <div>
        <label>Address Line</label>
        <input v-model="form.address_line" type="text" />
      </div>

      <div>
        <label>Price</label>
        <input v-model.number="form.price" type="number" />
      </div>

      <div>
        <label>Property Type</label>
        <select v-model="form.property_type">
          <option disabled value="">Select</option>
          <option value="apartment">Apartment</option>
          <option value="villa">Villa</option>
          <option value="plot">Plot</option>
          <option value="commercial">Commercial</option>
        </select>
      </div>

      <div>
        <label>Listing Type</label>
        <select v-model="form.listing_type">
          <option disabled value="">Select</option>
          <option value="sale">Sale</option>
          <option value="rent">Rent</option>
        </select>
      </div>

      <div>
        <label>
          <input type="checkbox" v-model="form.is_featured" />
          Featured
        </label>
      </div>

      <div>
        <button type="submit" :disabled="form.processing">
          Create
        </button>
      </div>

    </div>
  </form>
</template>



<style scoped>
label {
  margin-right: 2em;
}

div {
  padding: 2px
}
</style>
