<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    public function definition(): array
    {
        $locations = [
            'Mumbai' => 'Maharashtra',
            'Pune' => 'Maharashtra',
            'Delhi' => 'Delhi',
            'Noida' => 'Uttar Pradesh',
            'Lucknow' => 'Uttar Pradesh',
            'Jaipur' => 'Rajasthan',
            'Ahmedabad' => 'Gujarat',
            'Surat' => 'Gujarat',
            'Chandigarh' => 'Punjab',
            'Gurgaon' => 'Haryana',
            'Patna' => 'Bihar',
        ];

        $localities = [
            'Andheri West',
            'Whitefield',
            'Banjara Hills',
            'Sector 62',
            'Indirapuram',
            'Viman Nagar',
            'Malviya Nagar',
            'Powai',
            'Koramangala',
            'Civil Lines'
        ];

        $city = fake()->randomElement(array_keys($locations));

        return [
            'beds' => fake()->numberBetween(1, 5),
            'baths' => fake()->numberBetween(1, 4),
            'area' => fake()->numberBetween(600, 4000),

            'city' => $city,
            'state' => $locations[$city],

            'pincode' => fake()->numerify('######'),

            'address' => fake()->randomElement($localities),
            'address_line' => fake()->buildingNumber(),

            'price' => fake()->numberBetween(25_00_000, 3_50_00_000),

            'property_type' => fake()->randomElement([
                'apartment',
                'villa',
                'plot',
                'commercial'
            ]),

            'listing_type' => fake()->randomElement([
                'sale',
                'rent'
            ]),

            'is_featured' => fake()->boolean(25),
        ];
    }
}
