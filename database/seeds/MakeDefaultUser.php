<?php

use Illuminate\Database\Seeder;
use App\User;

class MakeDefaultUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name' => 'Admin',
            'email' => 'admin@xotv.com',
            'password' => '$2y$10$C5ZeJYr20o.Ubf9.Ghhrv.d4FA/ELDRhSLTGfERv./GxDytHEVzPu'
        ));
    }
}
