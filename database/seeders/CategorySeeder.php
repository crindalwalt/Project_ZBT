<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        1. Understanding Quran
//        2. Arabic (spoken)
//        3. Arabic (Grammar)
//        4. Tajweed
//        5. Quran recitation
//        6. Understanding Quran English

        Category::factory()->create([
            "name" => 'Understanding Quran',
            "illustration" => "assets/categoryImages/1.png",
        ]);
        Category::factory()->create([
            "name" => 'Arabic (spoken)',
            "illustration" => "assets/categoryImages/2.png",
        ]);
        Category::factory()->create([
            "name" => 'Arabic (Grammar)',
            "illustration" => "assets/categoryImages/3.png",
        ]);
        Category::factory()->create([
            "name" => 'Tajweed',
            "illustration" => "assets/categoryImages/4.png",
        ]);
        Category::factory()->create([
            "name" => 'Quran recitation',
            "illustration" => "assets/categoryImages/5.png",
        ]);
        Category::factory()->create([
            "name" => 'Understanding Quran English',
            "illustration" => "assets/categoryImages/6.png",
        ]);
    }
}
