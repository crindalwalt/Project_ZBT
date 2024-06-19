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
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'User khan',
            'email' => 'user@zbt.com',
            "role" => 1,
        ]);
        User::factory()->create([
            'name' => 'Admin Khan',
            'email' => 'admin@zbt.com',
            "role" => 0,
        ]);

        User::factory()->create([
            'name' => "Teacher Khan",
            'email' => 'teacher@zbt.com',
            'role' => 2,
        ]);


        $this->call([
            CourseSeeder::class,
            ProductSeeder::class,
            ProductReviewsSeeder::class,
            CategorySeeder::class,
            CartSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
