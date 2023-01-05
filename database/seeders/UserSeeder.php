<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jhon Torres',
            'email' => 'jhon.torres01@epn.edu.ec',
            'password' => bcrypt('123456')
        ]);

        User::factory(99)->create();
    }
}
