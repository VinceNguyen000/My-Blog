<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        //how many category a post has? 1, many?
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


//namespace App\Models;
//
//use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Illuminate\Support\Facades\File;
//use Spatie\YamlFrontMatter\YamlFrontMatter;
//
//class Post
//{
//    public $title, $excerpt, $date, $body, $slug;
//
//    public function __construct($title, $excerpt, $date, $body, $slug)
//    {
//        $this->title = $title;
//        $this->excerpt = $excerpt;
//        $this->date = $date;
//        $this->body = $body;
//        $this->slug = $slug;
//    }
//
//    //get all files in the path
//    public static function all()
//    {
//        return collect(File::files(resource_path("posts")))
//            ->map(fn($file) => YamlFrontMatter::parseFile($file))
//            ->map(fn($docs) => new Post(
//                $docs->title,
//                $docs->excerpt,
//                $docs->date,
//                $docs->body(),
//                $docs->slug
//            ));
//    }
//
//
//    //find slug in the path to navigate
//    public static function find($slug)
//    {
//        #1
//        //        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
//        //            throw new ModelNotFoundException();
//        //        }
//        //
//        //        return cache()->remember("posts,{$slug}", 1200, fn() => file_get_contents($path));
//        #2
//        return static::all()->firstWhere('slug', $slug);
//    }
//}
