<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{

    public static function all(){


        return [
            [
                'id' => 1,
                'title' => 'judul artikel 1',
                'author' => 'Rayhan',
                'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit, optio adipisci, debitis voluptatibus veritatis odio veniam magnam magni eaque iste, quidem tenetur hic quam omnis incidunt officia distinctio quis?',
            ],
            [
                'id' => 2,
                'title' => 'judul artikel 2',
                'author' => 'muhammad rayhan',
                'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit, optio adipisci, debitis voluptatibus veritatis odio veniam magnam magni eaque iste, quidem tenetur hic quam omnis incidunt officia distinctio quis?,
                '
            ]
        
        ];

    }
    public static function find ($slug): array
    {
        $post= Arr::first(static::all(),function ($post)use($slug){
            return $post['slug']==$slug;
            
                });
                if(! $post){
                    abort(404);
                }
                return $post;
    }
}
       
    
?>