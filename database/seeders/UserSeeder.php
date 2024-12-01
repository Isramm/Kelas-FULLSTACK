<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
        ->count(15)
        ->create();
        // User::create([
        //     'name' => fake()->name,
        //     'email' => fake()->email,
        //     'password' => bcrypt('password123'),
        //     'level' => 'Admin'
        // ]);

        // User::insert([
        //     [
        //         'name' => 'admin2',
        //         'email' => 'admin2@gmail.com',
        //         'password' => bcrypt('password123'),
        //         'level' => 'Admin'
        //     ],
        //     [
        //         'name' => 'admin3',
        //         'email' => 'admin3@gmail.com',
        //         'password' => bcrypt('password123'),
        //         'level' => 'Admin'
        //     ],
        // ]);

        // $user = new User;
        // $user->name = "adminbaru";
        // $user->email = "adminbaru@gmail.com";
        // $user->password = bcrypt('password123');
        // $user->level = "Admin";
        // $user->save();
    }
}
