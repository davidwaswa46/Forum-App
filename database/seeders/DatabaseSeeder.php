<?php

namespace Database\Seeders;
namespace App\Models;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        $posts =Post::factory(200)->recycle($users)->create();

        $comments= Comments::factory(100)->recycle($users) ->recycle($posts)->create();

        $luke = User::factory()
        ->has(Post::factory(45))
        ->has(Comments::factory(120)->recycle($posts))
        ->create([
            'name' => 'Luke Show',
            'email' => 'Lukeshow@gmail.com',
        ]);
    }
}
