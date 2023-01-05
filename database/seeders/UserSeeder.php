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
            'name' => 'Admin Blog',
            'email' => 'admin@epn.edu.ec',
            'password' => bcrypt('admin')
        ]);

        User::factory(99)->create();
    }
}
