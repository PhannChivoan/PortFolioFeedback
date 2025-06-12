<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if (!User::where('email', 'user@example.com')->exists()) {
        User::create([
        'name' => 'Example User',
        'email' => 'user@example.com',
        'password' => bcrypt('password'),
         ]);
         }

        }
}
