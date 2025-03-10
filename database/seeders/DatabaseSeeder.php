<?php

namespace Database\Seeders;

use App\Models\Speaker;
use App\Models\User;
use App\Models\Venue;
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

        User::factory()->create([
            'name' => 'Ahmad Zaid',
            'email' => 'ahmaadzaid7@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        Venue::factory(50)->create();
        Speaker::factory(10)->create();
    }
}