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
            "title" => "Mualam-ul-Quran Part 1",
            "slug" => "Mualam-ul-Quran-part-1",
            "regular_price" => "100",
            "discount_price" => "70",
            "quantity" => fake()->numberBetween(0, 50),
            "status" => "active",
            "category_id" => fake()->numberBetween(1, 6),
            "description" => "Muallim-ul-Quran represents a significant advancement in the journey to understand the Holy Quran. Grasping the teachings of this divine book has always been a challenge, particularly for those attempting to do so without guidance. Fortunately, this book, with its straightforward and innovative teaching approach, simplifies the process, enabling students to gain a deeper and more thorough understanding of the Quran. It empowers learners to comprehend the Quran directly in Arabic, without relying on traditional grammar rules and tables.

The primary goal of this book is to cultivate the skills necessary for beginners—whether in schools, colleges, universities, or Quran study circles—to easily understand the Quran. The method focuses on gradually building comprehension, starting with a single word, then progressing to phrases, sentences, and finally complete verses. This unique approach is the result of extensive research and has proven to be highly effective.

The book is currently available in three volumes, each consisting of six units. A fourth volume, which will cover units seven and eight, is expected to be published soon, Inshallah.

After completing the first six units, a student can understand 60% of any page of the Holy Quran independently. This method has been incorporated into the curricula of numerous schools, colleges, and universities across Pakistan.
"
        ]);

        ProductMedia::factory()->create([
            "product_id" => $prod1->getKey(),
            "image" => "storage/ProductImages/mul-1.jpeg",
        ]);

// product 2

$product2 = Product::factory()->create([
    "title" => "Mualam-ul-Quran Part 2 ",
    "slug" => "Mualam-ul-Quran-part-2",
    "regular_price" => "100",
    "discount_price" => "70",
    "quantity" => fake()->numberBetween(0, 50),
    "status" => "active",
    "category_id" => fake()->numberBetween(1, 6),
    "description" => "Muallim-ul-Quran represents a significant advancement in the journey to understand the Holy Quran. Grasping the teachings of this divine book has always been a challenge, particularly for those attempting to do so without guidance. Fortunately, this book, with its straightforward and innovative teaching approach, simplifies the process, enabling students to gain a deeper and more thorough understanding of the Quran. It empowers learners to comprehend the Quran directly in Arabic, without relying on traditional grammar rules and tables.

The primary goal of this book is to cultivate the skills necessary for beginners—whether in schools, colleges, universities, or Quran study circles—to easily understand the Quran. The method focuses on gradually building comprehension, starting with a single word, then progressing to phrases, sentences, and finally complete verses. This unique approach is the result of extensive research and has proven to be highly effective.

The book is currently available in three volumes, each consisting of six units. A fourth volume, which will cover units seven and eight, is expected to be published soon, Inshallah.

After completing the first six units, a student can understand 60% of any page of the Holy Quran independently. This method has been incorporated into the curricula of numerous schools, colleges, and universities across Pakistan.
"
]);

ProductMedia::factory()->create([
    "product_id" => $product2->getKey(),
    "image" => "storage/ProductImages/mul-2.jpeg",
]);



// product 3

$product3 = Product::factory()->create([
    "title" => "Mualam-ul-Quran Part 3",
    "slug" => "Mualam-ul-Quran-part-3",
    "regular_price" => "100",
    "discount_price" => "70",
    "quantity" => fake()->numberBetween(0, 50),
    "status" => "active",
    "category_id" => fake()->numberBetween(1, 6),
    "description" => "Muallim-ul-Quran represents a significant advancement in the journey to understand the Holy Quran. Grasping the teachings of this divine book has always been a challenge, particularly for those attempting to do so without guidance. Fortunately, this book, with its straightforward and innovative teaching approach, simplifies the process, enabling students to gain a deeper and more thorough understanding of the Quran. It empowers learners to comprehend the Quran directly in Arabic, without relying on traditional grammar rules and tables.

The primary goal of this book is to cultivate the skills necessary for beginners—whether in schools, colleges, universities, or Quran study circles—to easily understand the Quran. The method focuses on gradually building comprehension, starting with a single word, then progressing to phrases, sentences, and finally complete verses. This unique approach is the result of extensive research and has proven to be highly effective.

The book is currently available in three volumes, each consisting of six units. A fourth volume, which will cover units seven and eight, is expected to be published soon, Inshallah.

After completing the first six units, a student can understand 60% of any page of the Holy Quran independently. This method has been incorporated into the curricula of numerous schools, colleges, and universities across Pakistan.
"
]);

ProductMedia::factory()->create([
    "product_id" => $product3->getKey(),
    "image" => "storage/ProductImages/mul-3.jpeg",
]);


        // $prod2 = Product::factory()->create([
        //     "title" => "The physyology of money",
        //     "slug" => "the-physyology-of-money",
        //     "regular_price" => "100",
        //     "discount_price" => "70",
        //     "quantity" => fake()->numberBetween(0, 50),
        //     "status" => "active",
        //     "category_id" => fake()->numberBetween(1, 6),
        //     "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        // ]);

        // ProductMedia::factory()->create([
        //     "product_id" => $prod2->getKey(),
        //     "image" => "storage/ProductImages/2.png",
        // ]);



        // $prod3 = Product::factory()->create([
        //     "title" => "Quran Majeed",
        //     "slug" => "quran-majeed",
        //     "regular_price" => "100",
        //     "discount_price" => "70",
        //     "quantity" => fake()->numberBetween(0, 50),
        //     "status" => "active",
        //     "category_id" => fake()->numberBetween(1, 6),
        //     "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        // ]);

        // ProductMedia::factory()->create([
        //     "product_id" => $prod3->getKey(),
        //     "image" => "storage/ProductImages/3.png",
        // ]);





        // $prod4 = Product::factory()->create([
        //     "title" => "Trading in the zone",
        //     "slug" => "trading-in-the-zone",
        //     "regular_price" => "100",
        //     "discount_price" => "70",
        //     "quantity" => fake()->numberBetween(0, 50),
        //     "status" => "active",
        //     "category_id" => fake()->numberBetween(1, 6),
        //     "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        // ]);

        // ProductMedia::factory()->create([
        //     "product_id" => $prod4->getKey(),
        //     "image" => "storage/ProductImages/4.png",
        // ]);











        // $prod5 = Product::factory()->create([
        //     "title" => "Sahi Bukhari",
        //     "slug" => "sahi-bukhari",
        //     "regular_price" => "100",
        //     "discount_price" => "70",
        //     "quantity" => fake()->numberBetween(0, 50),
        //     "status" => "active",
        //     "category_id" => fake()->numberBetween(1, 6),
        //     "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        // ]);

        // ProductMedia::factory()->create([
        //     "product_id" => $prod5->getKey(),
        //     "image" => "storage/ProductImages/5.png",
        // ]);









        // $prod6 = Product::factory()->create([
        //     "title" => "Sahi Muslim",
        //     "slug" => "sahi-muslim",
        //     "regular_price" => "100",
        //     "discount_price" => "70",
        //     "quantity" => fake()->numberBetween(0, 50),
        //     "status" => "active",
        //     "category_id" => fake()->numberBetween(1, 6),
        //     "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Cursus mattis molestie a iaculis at. Tristique risus nec feugiat in fermentum. Morbi blandit cursus risus at ultrices mi tempus. Bibendum enim facilisis gravida neque convallis a. Eget nulla facilisi etiam dignissim diam quis enim lobortis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Rhoncus urna neque viverra justo. Est pellentesque elit ullamcorper dignissim cras tincidunt. Pulvinar pellentesque habitant morbi tristique senectus."
        // ]);

        // ProductMedia::factory()->create([
        //     "product_id" => $prod6->getKey(),
        //     "image" => "storage/ProductImages/6.png",
        // ]);
    }
}
