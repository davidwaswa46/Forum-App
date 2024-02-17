<?php

namespace Database\Seeders;
//namespace App\Models;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = \App\Models\User::factory(10)->create();

        $luke = \App\Models\User::factory()->create([
            'name' => 'Luke Show',
            'email' => 'Lukeshow@gmail.com',
        ]);
    }
}
