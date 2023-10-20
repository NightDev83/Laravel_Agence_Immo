<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PostController;
use App\Models\User;
use Database\Factories\PostControllerFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(8)->create();

        User::factory(1)->create([
            'email'=> 'dylan.bouraoui83@gmail.com',
            'password'=>'jesuisun'
        ]);

        // PostController::factory(34)->create();

    }
}
