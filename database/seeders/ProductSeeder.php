<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Product::factory(10)->create();
//        ProductMedia::factory(10)->create();


        $prod1 = Product::factory()->create([
            "title" => "Rich Dad Poor Dad",
            "slug" => "rich-dad-poor-dad",
            "regular_price" => "100",
            "discount_price" => "70",
            "quantity" => fake()->numberBetween(0, 50),
            "status" => "active",
            "category_id" => fake()->numberBetween(1, 6),
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        ]);

        ProductMedia::factory()->create([
            "product_id" => $prod1->getKey(),
            "image" => "storage/ProductImages/1.png",
        ]);








        $prod2 = Product::factory()->create([
            "title" => "The physyology of money",
            "slug" => "the-physyology-of-money",
            "regular_price" => "100",
            "discount_price" => "70",
            "quantity" => fake()->numberBetween(0, 50),
            "status" => "active",
            "category_id" => fake()->numberBetween(1, 6),
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        ]);

        ProductMedia::factory()->create([
            "product_id" => $prod2->getKey(),
            "image" => "storage/ProductImages/2.png",
        ]);



        $prod3 = Product::factory()->create([
            "title" => "Quran Majeed",
            "slug" => "quran-majeed",
            "regular_price" => "100",
            "discount_price" => "70",
            "quantity" => fake()->numberBetween(0, 50),
            "status" => "active",
            "category_id" => fake()->numberBetween(1, 6),
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        ]);

        ProductMedia::factory()->create([
            "product_id" => $prod3->getKey(),
            "image" => "storage/ProductImages/3.png",
        ]);





        $prod4 = Product::factory()->create([
            "title" => "Trading in the zone",
            "slug" => "trading-in-the-zone",
            "regular_price" => "100",
            "discount_price" => "70",
            "quantity" => fake()->numberBetween(0, 50),
            "status" => "active",
            "category_id" => fake()->numberBetween(1, 6),
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        ]);

        ProductMedia::factory()->create([
            "product_id" => $prod4->getKey(),
            "image" => "storage/ProductImages/4.png",
        ]);











        $prod5 = Product::factory()->create([
            "title" => "Sahi Bukhari",
            "slug" => "sahi-bukhari",
            "regular_price" => "100",
            "discount_price" => "70",
            "quantity" => fake()->numberBetween(0, 50),
            "status" => "active",
            "category_id" => fake()->numberBetween(1, 6),
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        ]);

        ProductMedia::factory()->create([
            "product_id" => $prod5->getKey(),
            "image" => "storage/ProductImages/5.png",
        ]);









        $prod6 = Product::factory()->create([
            "title" => "Sahi Muslim",
            "slug" => "sahi-muslim",
            "regular_price" => "100",
            "discount_price" => "70",
            "quantity" => fake()->numberBetween(0, 50),
            "status" => "active",
            "category_id" => fake()->numberBetween(1, 6),
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        ]);

        ProductMedia::factory()->create([
            "product_id" => $prod6->getKey(),
            "image" => "storage/ProductImages/6.png",
        ]);
    }
}
