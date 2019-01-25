<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bsnl1 = Products::create(array(
            'name' => '100MB',
            'provider_id' => '1',
        ));

        $bsnl2 = Products::create(array(
            'name' => '200MB',
            'provider_id' => '1',
        ));

        $bsnl3 = Products::create(array(
            'name' => '300MB',
            'provider_id' => '1',
        ));

        $airtel1 = Products::create(array(
            'name' => '17MB',
            'provider_id' => '2',
        ));

        $airtel2 = Products::create(array(
            'name' => '72MB',
            'provider_id' => '2',
        ));

        $indane1 = Products::create(array(
            'name' => 'Standard Tariff',
            'provider_id' => '3',
        ));

        $indane2= Products::create(array(
            'name' => 'Green Tariff',
            'provider_id' => '3',
        ));

        $tata1 = Products::create(array(
            'name' => 'Standart Tariff',
            'provider_id' => '4',
        ));

        $tata2 = Products::create(array(
            'name' => 'Saver Tariff',
            'provider_id' => '4',
        ));
    }
}
