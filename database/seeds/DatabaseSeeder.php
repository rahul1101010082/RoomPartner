<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'first_name'      => 'admin',
            'email'     => 'admin@example.org',
            'birth_date' => date('Y-m-d', strtotime('Y-m-d')),
            'password'  => bcrypt('Admin@1234'),
            'is_active' => 1,
            'confirmed' => 1
        ]);
    }
}
