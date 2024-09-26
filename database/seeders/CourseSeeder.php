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

        // course 1st
        Course::factory()->create([
            "title" => "Understanding Quran Course (Adults)– 12-Month Program",
            "slug" => "Understanding-Quran-Course",
            "price_id" => "price_1PytdtCfbf5mW58WtQwWceix",
            "category_id" => "1",
            "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
            "image" => "storage/CourseImages/2o.png",
            "start_date" => "2024-12-26",
            "language" => "Urdu",
            "duration" => "30",
            "months" => "12",
            "type" => "paid",
            "regular_price" => "49.99",
            "discount_price" => "19.99",
            "description" => 'Course Overview: Our 12-month "Understanding Quran" course is designed to equip students with the ability to translate 100% of the Quranic verses. This course is ideal for those who want to deepen their connection with the Quran without getting into the complexities of Arabic grammar and composition.
            Key Features:
            Practical Focus: Instead of diving into intricate grammar rules, this course focuses on practical translation skills. With just a basic understanding of Urdu, students can effectively grasp the meaning of Quranic verses.
            Comprehensive Learning: By the end of the course, students will be capable of translating the majority of the Quran, enhancing their understanding and connection to the Divine message.
            Accessible Support: Our dedicated teachers are available to provide assistance beyond class hours. Students are encouraged to reach out anytime for help with homework, practice, or any other questions they may have.
            This course is a perfect opportunity for those seeking to understand the Quran more deeply, with a straightforward and supportive approach.
            Class Schedule
            Days: Monday to Friday
            Duration: 30-minute class
            Off Days: Saturday and Sunday
            12 Month program
            Beginner to master',

        ]);





        // course 2nd
        Course::factory()->create([
            "title" => "Understanding Quran Course (for Kids)",
            "slug" => "Understanding-Quran-Course-For-Kids",
            "price_id" => "price_1POHcjCfbf5mW58WMuHFEUuo",
            "category_id" => "2",
            "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
            "image" => "storage/CourseImages/1o.png",
            "start_date" => "2024-05-03",
            "language" => "Urdu",
            "duration" => "30",
            "months" => "24",
            "type" => "paid",
            "regular_price" => "54.99",
            "discount_price" => "17.99",
            "description" => 'Our 24-month Quran Understanding Course is designed for children and provides a comprehensive foundation in:
                Recitation: Learn to recite the Quran with accuracy.
                Tajweed: Master the rules of tajweed for proper pronunciation.
                Hifz: Memorize selected portions of the Quran.
                Arabic Language: Gain a basic understanding of Arabic.
                Word Meanings: Start with simple words and gradually move to more complex ones, enhancing comprehension.
                This course is perfect for kids who want to connect deeply with the Quran and build a strong spiritual and linguistic foundation.
                Class Schedule
                Days: Monday to Friday
                Duration: 30-minute class
                Off Days: Saturday and Sunday
                24-Month Course
'

        ]);

        // course 3rd

        Course::factory()->create([
            "title" => "Arabic Language Course (Adults)",
            "slug" => "Arabic-Language-Course",
            "price_id" => "price_1POHcjCfbf5mW58WMuHFEUuo",
            "category_id" => "3",
            "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
            "image" => "storage/CourseImages/3o.png",
            "start_date" => "2024-05-03",
            "language" => "Urdu",
            "duration" => "30",
            "months" => "12",
            "type" => "paid",
            "regular_price" => "69.99",
            "discount_price" => "29.99",
            "description" => '
                    Join our 12-month Arabic Language Course and learn to read and write Arabic through live, online classes. We use the following books to guide your learning:
                    العربية بين يديك
                    إقرأ
                    دروس اللغة العربية
                    Why Choose Us?
                    Grammar-Free: Focus on practical language skills without the complexity of grammar.
                    Live Online Classes: Engage in real-time lessons from the comfort of your home.
                    Cultural Insights: Gain a deeper understanding of Arabic culture as you progress.
                    Enroll Now
                    Start your journey to mastering Arabic with expert guidance and proven resources. Enroll today!

                    Class Schedule
                    Days: Monday to Friday
                    Duration: 30-minute class
                    Off Days: Saturday and Sunday
                    Fees: 7500 PKR monthly
                    12 Month program
                    Beginner to intermediate

'

        ]);





            // course 4th

            Course::factory()->create([
                "title" => "Arabic Language Course (for Kids)",
                "slug" => "Arabic-Language-Course-For-Kids",
                "price_id" => "price_1POHcjCfbf5mW58WMuHFEUuo",
                "category_id" => "4",
                "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
                "image" => "storage/CourseImages/4o.png",
                "start_date" => "2024-05-03",
                "language" => "Urdu",
                "duration" => "30",
                "months" => "24",
                "type" => "paid",
                "regular_price" => "59.99",
                "discount_price" => "24.99",
                "description" => '
                        Arabic Language Course (for Kids)
                        Enroll your child in our 24-month Arabic Language Course, designed for kids aged 5-12. This course builds a strong foundation, enabling students to speak and communicate in Arabic while preparing them for advanced language learning.
                        Course Highlights
                        Age-Appropriate Learning: Tailored for children aged 5-12.
                        Foundation for Advanced Learning: Provides the base for future Arabic language studies.
                        Speak and Communicate: By the end of the course, kids will confidently interact in Arabic.
                        24-Month Duration: A comprehensive two-year program for deep learning.
                        Why Choose Us?
                        Live Online Classes: Interactive, real-time lessons that engage young learners.
                        Fun and Interactive: Lessons are designed to be enjoyable, making language learning exciting.
                        Cultural Insights: Children will also learn about Arabic culture, enriching their learning experience.
                        Class Schedule
                        Days: Monday to Friday
                        Duration: 30-minute class
                        Off Days: Saturday and Sunday
                        24-Month course


    '

            ]);











































































        //         Course::factory()->create([
        //             "title" => "Understanding Quran pt 1",
        //             "slug" => "understanding-quran-pt-1",
        //             "price_id" => "price_1POHcjCfbf5mW58WMuHFEUuo",
        //             "category_id" => "1",
        //             "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
        //             "image" => "storage/CourseImages/1.png",
        //             "start_date" => "2024-05-03",
        //             "language" => "Urdu",
        //             "duration" => "20",
        //             "months" => "3",
        //             "type" => "paid",
        //             "regular_price" => "70",
        //             "discount_price" => "50",
        //             "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
        //             Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
        //             Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        //         ]);


        //         Course::factory()->create([
        //             "title" => "Understanding Quran pt 2",
        //             "slug" => "understanding-quran-pt-2",
        //             "price_id" => "price_1PObBgCfbf5mW58WdP5DIaav",
        //             "category_id" => "2",
        //             "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
        //             "image" => "storage/CourseImages/2.png",
        //             "start_date" => "2024-12-26",
        //             "language" => "Urdu",
        //             "duration" => "30",
        //             "months" => "12",
        //             "type" => "paid",
        //             "regular_price" => "49.99",
        //             "discount_price" => "19.99",
        //             "description" => 'Course Overview: Our 12-month "Understanding Quran" course is designed to equip students with the ability to translate 100% of the Quranic verses. This course is ideal for those who want to deepen their connection with the Quran without getting into the complexities of Arabic grammar and composition.
        //             Key Features:
        //             Practical Focus: Instead of diving into intricate grammar rules, this course focuses on practical translation skills. With just a basic understanding of Urdu, students can effectively grasp the meaning of Quranic verses.
        //             Comprehensive Learning: By the end of the course, students will be capable of translating the majority of the Quran, enhancing their understanding and connection to the Divine message.
        //             Accessible Support: Our dedicated teachers are available to provide assistance beyond class hours. Students are encouraged to reach out anytime for help with homework, practice, or any other questions they may have.
        //             This course is a perfect opportunity for those seeking to understand the Quran more deeply, with a straightforward and supportive approach.
        //             Class Schedule
        //             Days: Monday to Friday
        //             Duration: 30-minute class
        //             Off Days: Saturday and Sunday
        //             12 Month program
        //             Beginner to master
        // '

        //         ]);


        //         Course::factory()->create([
        //             "title" => "Fiqa by Abu Hanifa (RA)",
        //             "price_id" => "price_1PObD6Cfbf5mW58WgCXQJ9QG",
        //             "slug" => "fiqa-by-abu-hanifa",
        //             "category_id" => "3",
        //             "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
        //             "image" => "storage/CourseImages/3.png",
        //             "start_date" => "2024-05-03",
        //             "language" => "English",
        //             "duration" => "20",
        //             "months" => "3",
        //             "type" => "paid",
        //             "regular_price" => "150",
        //             "discount_price" => "100",
        //             "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
        //             Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
        //             Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        //         ]);


        //         Course::factory()->create([
        //             "title" => "Fiqa by Imam Jafar Sadiq (RA)",
        //             'price_id' => "price_1POcOVCfbf5mW58WGPpGgQO7",
        //             "slug" => "fiqa-by-imam-jafar-sadiq",
        //             "category_id" => "4",
        //             "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
        //             "image" => "storage/CourseImages/4.png",
        //             "start_date" => "2024-05-03",
        //             "language" => "English",
        //             "duration" => "20",
        //             "months" => "3",
        //             "type" => "paid",
        //             "regular_price" => "250",
        //             "discount_price" => "100",
        //             "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
        //             Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
        //             Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        //         ]);


        //         Course::factory()->create([
        //             "title" => "Quran For a Mujahid",
        //             "price_id" => "price_1POcQTCfbf5mW58WNcBDKqID",
        //             "slug" => "quran-for-a-mujahid",
        //             "category_id" => "5",
        //             "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
        //             "image" => "storage/CourseImages/5.png",
        //             "start_date" => "2024-05-03",
        //             "language" => "English",
        //             "duration" => "20",
        //             "months" => "3",
        //             "type" => "paid",
        //             "regular_price" => "250",
        //             "discount_price" => "100",
        //             "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
        //             Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
        //             Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        //         ]);


        //         Course::factory()->create([
        //             "title" => "Mantaqi Islam",
        //             "price_id" => "price_1POcSNCfbf5mW58Ww6rAxS0s",
        //             "slug" => "Mantaqi-islam",
        //             "category_id" => "6",
        //             "video" => "https://www.youtube.com/watch?v=XXISD7y4GgA",
        //             "image" => "storage/CourseImages/6.png",
        //             "start_date" => "2024-05-03",
        //             "language" => "English",
        //             "duration" => "20",
        //             "months" => "3",
        //             "type" => "paid",
        //             "regular_price" => "7000",
        //             "discount_price" => "3000",
        //             "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim facilisis gravida neque convallis. Quisque egestas diam in arcu cursus. Morbi tristique senectus et netus et malesuada. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed id semper risus in hendrerit gravida rutrum. Quisque id diam vel quam elementum pulvinar etiam non. Diam phasellus vestibulum lorem sed risus ultricies. Pellentesque id nibh tortor id aliquet lectus. Cum sociis natoque penatibus et magnis dis parturient montes. Eu consequat ac felis donec et odio pellentesque diam volutpat. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Massa tincidunt nunc pulvinar sapien et ligula. Mi bibendum neque egestas congue quisque egestas. A scelerisque purus semper eget duis. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc vel risus commodo.
        //             Pharetra et ultrices neque ornare aenean euismod. Ac tortor dignissim convallis aenean et tortor. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquet porttitor lacus luctus accumsan tortor posuere ac ut. Vitae nunc sed velit dignissim sodales ut eu sem. Purus viverra accumsan in nisl nisi scelerisque eu. Odio ut enim blandit volutpat maecenas volutpat. Orci a scelerisque purus semper eget duis. Ultricies integer quis auctor elit sed vulputate mi sit amet. Eleifend donec pretium vulputate sapien nec sagittis. Tempor orci dapibus ultrices in iaculis. Dignissim diam quis enim lobortis scelerisque.
        //             Amet porttitor eget dolor morbi non arcu risus. Volutpat ac tincidunt vitae semper quis lectus nulla. Faucibus vitae aliquet nec ullamcorper sit. Sed odio morbi quis commodo odio aenean sed adipiscing. Odio facilisis mauris sit amet massa vitae. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Tellus rutrum tellus pellentesque eu tincidunt tortor. Vitae semper quis lectus nulla at volutpat diam. Aliquam nulla facilisi cras fermentum odio eu. Metus dictum at tempor commodo ullamcorper a lacus vestibulum. Nunc congue nisi vitae suscipit tellus mauris. Egestas fringilla phasellus faucibus scelerisque. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Ultrices eros in cursus turpis massa. Nam at lectus urna duis convallis. Integer quis auctor elit sed vulputate. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis."

        //         ]);
    }
}
