<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Course::factory(20)->create();


        Course::factory()->create([
            "title" => "Understanding Quran pt 1",
            "slug" => "understanding-quran-pt-1",
            "price_id" => "price_1POHcjCfbf5mW58WMuHFEUuo",
            "category_id" => "1",
            "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
            "image" => "storage/CourseImages/1.png",
            "start_date" => "2024-05-03",
            "language" => "Urdu",
            "duration" => "20",
            "months" => "3",
            "type" => "paid",
            "regular_price" => "70",
            "discount_price" => "50",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
            Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
            Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        ]);


        Course::factory()->create([
            "title" => "Understanding Quran pt 2",
            "slug" => "understanding-quran-pt-2",
            "price_id" => "price_1PObBgCfbf5mW58WdP5DIaav",
            "category_id" => "2",
            "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
            "image" => "storage/CourseImages/2.png",
            "start_date" => "2024-05-03",
            "language" => "Urdu",
            "duration" => "20",
            "months" => "3",
            "type" => "paid",
            "regular_price" => "100",
            "discount_price" => "80",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
            Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
            Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        ]);


        Course::factory()->create([
            "title" => "Fiqa by Abu Hanifa (RA)",
            "price_id" => "price_1PObD6Cfbf5mW58WgCXQJ9QG",
            "slug" => "fiqa-by-abu-hanifa",
            "category_id" => "3",
            "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
            "image" => "storage/CourseImages/3.png",
            "start_date" => "2024-05-03",
            "language" => "English",
            "duration" => "20",
            "months" => "3",
            "type" => "paid",
            "regular_price" => "150",
            "discount_price" => "100",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
            Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
            Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        ]);


        Course::factory()->create([
            "title" => "Fiqa by Imam Jafar Sadiq (RA)",
            'price_id' => "price_1POcOVCfbf5mW58WGPpGgQO7",
            "slug" => "fiqa-by-imam-jafar-sadiq",
            "category_id" => "4",
            "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
            "image" => "storage/CourseImages/4.png",
            "start_date" => "2024-05-03",
            "language" => "English",
            "duration" => "20",
            "months" => "3",
            "type" => "paid",
            "regular_price" => "250",
            "discount_price" => "100",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
            Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
            Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        ]);


        Course::factory()->create([
            "title" => "Quran For a Mujahid",
            "price_id" => "price_1POcQTCfbf5mW58WNcBDKqID",
            "slug" => "quran-for-a-mujahid",
            "category_id" => "5",
            "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
            "image" => "storage/CourseImages/5.png",
            "start_date" => "2024-05-03",
            "language" => "English",
            "duration" => "20",
            "months" => "3",
            "type" => "paid",
            "regular_price" => "250",
            "discount_price" => "100",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
            Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
            Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        ]);


        Course::factory()->create([
            "title" => "Mantaqi Islam",
            "price_id" => "price_1POcSNCfbf5mW58Ww6rAxS0s",
            "slug" => "Mantaqi-islam",
            "category_id" => "6",
            "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
            "image" => "storage/CourseImages/6.png",
            "start_date" => "2024-05-03",
            "language" => "English",
            "duration" => "20",
            "months" => "3",
            "type" => "paid",
            "regular_price" => "7000",
            "discount_price" => "3000",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
            Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
            Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        ]);


    }
}
