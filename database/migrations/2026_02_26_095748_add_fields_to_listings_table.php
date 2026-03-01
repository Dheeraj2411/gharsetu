<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('listings', function (Blueprint $table) {


            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->unsignedTinyInteger('beds');
            $table->unsignedTinyInteger('baths');
            $table->unsignedInteger('area'); // sqft

            $table->string('city');
            $table->string('state');
            $table->char('pincode', 6);
            $table->string('address');
            $table->string('address_line');

            $table->unsignedBigInteger('price');

            $table->enum('property_type', ['apartment', 'villa', 'plot', 'commercial']);
            $table->enum('listing_type', ['sale', 'rent']);

            $table->boolean('is_featured')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('listings', [
            'beds',
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
            'is_featured'
        ]);
    }
};
