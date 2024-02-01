<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
#1
//    $document = YamlFrontMatter::parseFile(
//        resource_path('posts/my-fourth-post.html')
//    );
//    ddd($document->body());

#2
//    $files = File::files(resource_path("posts/"));
//    $posts = [];
//    foreach($files as $file) {
//        $documents = YamlFrontMatter::parseFile($file);
//        $posts[] = new Post(
//            $documents->title,
//            $documents->excerpt,
//            $documents->date,
//            $documents->body(),
//            $documents->slug
//        );
//    }

#3
//    $files = File::files(resource_path("posts/"));
//    $posts = array_map(function ($file) {
//        $documents = YamlFrontMatter::parseFile($file);
//        return new Post(
//            $documents->title,
//            $documents->excerpt,
//            $documents->date,
//            $documents->body(),
//            $documents->slug
//        );
//    }, $files);

#4
//    $files = File::files(resource_path("posts/"));
//    $posts= collect($files)->map(
//        function ($file) {
//            $documents = YamlFrontMatter::parseFile($file);
//            return new Post(
//            $documents->title,
//            $documents->excerpt,
//            $documents->date,
//            $documents->body(),
//            $documents->slug
//            );
//        });


#5 map files in dir and map props in files

//    $posts = collect(File::files(resource_path("posts")))
//        ->map(fn($file) => YamlFrontMatter::parseFile($file))
//            ->map(fn($file) => new Post(
//                $file->title,
//                $file->body(),
//                $file->slug,
//                $file->exceprt,
//                $file->date
//            ));

    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post}', function ($slug) {
    //{post} will be passed to func as $slug
    //find a post by its slug and pass to view called "post"
    #2

    $post = POST::find($slug);

    return view('post', [
        'post' => $post
    ]);

    #1
//    $path = __DIR__ . "/../resources/posts/{$slug}.html";
//
//    if (!file_exists($path)) {
//        return redirect('/');
//        // abort(404);
//    }
//
//    //use cache to save less access to expensive operations
//    $post = cache()->remember("posts,{$slug}", 1200, function () use ($path) {
//        var_dump('var get content');
//        return file_get_contents($path);
//    });
//
//
//    return view('post', [
//        'post' => $post
//    ]);
})->where('post', '[A-z_\-]+');

