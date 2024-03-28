<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'is_admin' => true
        ]);

        User::factory()->create([
            'name' => 'Alif nur rachman',
            'email' => 'alifnurrachman@gmail.com',
            //'is_admin' => false
        ]);

        /*User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkj00r0Q5byMi.Ye4oKoEa3Ro911C/.og/at2.uheWG/igi', //password
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
        );*/

        User::factory(100)->create();
        Todo::factory(500)->create();
    }
}
