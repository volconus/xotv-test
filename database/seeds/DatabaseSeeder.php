<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MakeDefaultUser::class);
        $this->call(ProviderCatsSeeder::class);
        $this->call(ProvidersSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ProductVariantsSeeder::class);
    }
}
