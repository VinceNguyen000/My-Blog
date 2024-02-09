<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory(1)->create();




        $personal = Category::create([
             'name' =>'Personal',
             'slug' => 'personal'
         ]);



        $family = Category::create([
            'name' =>'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' =>'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => $personal->id,
            'slug' => 'my-personal-post',
            'title' => 'My Personal Post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'bla bla bla'
        ]);

        Post::create([
            'user_id' => 2,
            'category_id' => $family->id,
            'slug' => 'my-family-post',
            'title' => 'My Family Post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'bla bla bla'
        ]);

        Post::create([
            'user_id' => 3,
            'category_id' => $work->id,
            'slug' => 'my-work-post',
            'title' => 'My Work Post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'bla bla bla'
        ]);
    }
}
