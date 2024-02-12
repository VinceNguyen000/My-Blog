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


       $user = User::factory()->create([
            'name' => 'GIJOE'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

//        User::truncate();
//        Post::truncate();
//        Category::truncate();
//        $user = User::factory()->create();
//
//        $personal = Category::create([
//             'name' =>'Personal',
//             'slug' => 'personal'
//         ]);
//
//        $family = Category::create([
//            'name' =>'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' =>'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'slug' => 'my-personal-post',
//            'title' => 'My Personal Post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>bla bla bla</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'slug' => 'my-family-post',
//            'title' => 'My Family Post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>bla bla bla</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'slug' => 'my-work-post',
//            'title' => 'My Work Post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>bla bla bla</p>'
//        ]);
    }
}
