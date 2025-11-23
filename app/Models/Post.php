<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-pertama',
                "title" => "Judul Artikel Pertama",
                "author" => "M. Febrian Syah",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum sed, voluptas ut similique sequi enim possimus nulla consequuntur, cum eius nemo aliquam officiis eligendi laboriosam at animi obcaecati libero tempore."
            ],
            [
                "id"=> 2,
                'slug' => 'judul-artikel-kedua',
                "title" => "Judul Artikel Kedua",
                "author" => "M. Febrian Syah",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum sed, voluptas ut similique sequi enim possimus nulla consequuntur, cum eius nemo aliquam officiis eligendi laboriosam at animi obcaecati libero tempore."
            ]
        ];
    }

    public static function find($slug): array {
        // return Arr::first(static::all(), function($post) use ($slug) {
        // return $post['slug'] == $slug;

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404);
        }
        
        return $post;
    }
}