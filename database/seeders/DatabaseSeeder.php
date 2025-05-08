<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Clear existing users if necessary (optional)
        // User::truncate();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'email@gmail.com',
            'password' => Hash::make('password123'), // Hash the password
        ]);

        // You can add other seeders here if needed
        // $this->call([
        //     OtherSeeder::class,
        // ]);
    }
}
