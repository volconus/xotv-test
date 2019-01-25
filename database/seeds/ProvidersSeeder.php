<?php

use App\Providers;
use Illuminate\Database\Seeder;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bsnl = Providers::create(array(
            'name' => 'BSNL',
            'cat_id' => '1',
        ));

        $airtel = Providers::create(array(
            'name' => 'Airtel',
            'cat_id' => '1',
        ));

        $indane = Providers::create(array(
            'name' => 'Indane energy',
            'cat_id' => '2',
        ));

        $tata = Providers::create(array(
            'name' => 'Tata Power',
            'cat_id' => '2',
        ));
    }
}
