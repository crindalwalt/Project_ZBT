<?php

namespace Database\Seeders;

use App\Models\BadgeStudents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BadgeStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BadgeStudents::factory(30)->create();
    }
}
