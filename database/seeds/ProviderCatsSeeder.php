<?php

use App\ProviderCats;
use Illuminate\Database\Seeder;

class ProviderCatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b = ProviderCats::create(array(
            'name' => 'BROADBAND',
            'status' => 'A',
        ));

        $e = ProviderCats::create(array(
            'name' => 'ENERGY',
            'status' => 'A',
        ));
    }
}
