<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Blog::truncate();

        User::factory()->create();

        $frontend = Category::create([
            'title' => 'frontend',
            'slug' => 'frontend'
        ]);

        $backend = Category::create([
            'title' => 'backend',
            'slug' => 'backend'
        ]);

        Blog::create([
            'title' => "What is Bootstrap",
            'category_id' => $frontend->id,
            'slug' => 'what-is-bootstrap',
            'intro' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore assumenda ipsa rem vero. Dignissimos recusandae magnam assumenda deserunt veniam magni? ",
            'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad quo exercitationem praesentium odio vitae dolorem pariatur doloremque, corrupti, cum ullam nam nesciunt, repudiandae nobis debitis minima. Deserunt id voluptate ea repellendus similique provident eum dolorem reprehenderit suscipit itaque voluptates error corrupti ipsum tempora distinctio corporis accusamus optio, consequuntur alias. Vero consequuntur est eum quia quisquam, quaerat fuga doloremque quos provident mollitia reiciendis dolorum sunt fugiat iure corporis neque molestias eveniet assumenda! Modi, eligendi qui quia in quae ab fugit itaque officiis amet sequi praesentium nemo voluptatum laudantium perspiciatis, nam ipsum rem suscipit? Aperiam facere, iusto, tempora expedita possimus delectus pariatur voluptatum earum molestiae maiores et? Facilis temporibus officiis aut. Sed dicta cupiditate labore ab incidunt veniam ex nisi maxime reprehenderit."
        ]);

        Blog::create([
            'title' => "What is Laravel",
            'category_id' => $backend->id,
            'slug' => 'what-is-laravel',
            'intro' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore assumenda ipsa rem vero. Dignissimos recusandae magnam assumenda deserunt veniam magni? ",
            'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad quo exercitationem praesentium odio vitae dolorem pariatur doloremque, corrupti, cum ullam nam nesciunt, repudiandae nobis debitis minima. Deserunt id voluptate ea repellendus similique provident eum dolorem reprehenderit suscipit itaque voluptates error corrupti ipsum tempora distinctio corporis accusamus optio, consequuntur alias. Vero consequuntur est eum quia quisquam, quaerat fuga doloremque quos provident mollitia reiciendis dolorum sunt fugiat iure corporis neque molestias eveniet assumenda! Modi, eligendi qui quia in quae ab fugit itaque officiis amet sequi praesentium nemo voluptatum laudantium perspiciatis, nam ipsum rem suscipit? Aperiam facere, iusto, tempora expedita possimus delectus pariatur voluptatum earum molestiae maiores et? Facilis temporibus officiis aut. Sed dicta cupiditate labore ab incidunt veniam ex nisi maxime reprehenderit."
        ]);
    }
}
