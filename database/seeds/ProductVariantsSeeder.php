<?php

use App\ProductVariants;
use Illuminate\Database\Seeder;

class ProductVariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductVariants::create(array(
            'name' => 'Default',
            'product_id' => 1,
            'price' => 30,
        ));

        ProductVariants::create(array(
            'name' => 'Default',
            'product_id' => 2,
            'price' => 40,
        ));

        ProductVariants::create(array(
            'name' => 'Default',
            'product_id' => 3,
            'price' => 50,
        ));

        ProductVariants::create(array(
            'name' => 'Default',
            'product_id' => 4,
            'price' => 25,
        ));

        ProductVariants::create(array(
            'name' => 'Default',
            'product_id' => 5,
            'price' => 40,
        ));

        // Energies / Indane / Standart
        ProductVariants::create(array(
            'name' => 'North',
            'product_id' => 6,
            'price' => 54.12,
        ));

        ProductVariants::create(array(
            'name' => 'Mid',
            'product_id' => 6,
            'price' => 56.50,
        ));

        ProductVariants::create(array(
            'name' => 'South',
            'product_id' => 6,
            'price' => 61.92,
        ));

        // Energies / Indane / Green
        ProductVariants::create(array(
            'name' => 'North',
            'product_id' => 7,
            'price' => 64.85,
        ));

        ProductVariants::create(array(
            'name' => 'Mid',
            'product_id' => 7,
            'price' => 68.21,
        ));

        ProductVariants::create(array(
            'name' => 'South',
            'product_id' => 7,
            'price' => 71.66,
        ));


        // Energies / Tata / Standart
        ProductVariants::create(array(
            'name' => 'North',
            'product_id' => 8,
            'price' => 51.95,
        ));

        ProductVariants::create(array(
            'name' => 'Mid',
            'product_id' => 8,
            'price' => 52,
        ));

        ProductVariants::create(array(
            'name' => 'South',
            'product_id' => 8,
            'price' => 56.62,
        ));

        // Energies / Tata / Gree
        ProductVariants::create(array(
            'name' => 'North',
            'product_id' => 9,
            'price' => 42.57,
        ));

        ProductVariants::create(array(
            'name' => 'Mid',
            'product_id' => 9,
            'price' => 45.22,
        ));

        ProductVariants::create(array(
            'name' => 'South',
            'product_id' => 9,
            'price' => 47.67,
        ));

    }
}
