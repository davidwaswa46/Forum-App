<?php

namespace Database\Seeders;
namespace App\Models;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)
            ->has(Post::factory(20))

            ->create();

        Comments::factory(100)->create();

        $luke = User::factory()->create([
            'name' => 'Luke Show',
            'email' => 'Lukeshow@gmail.com',
        ]);
    }
}
