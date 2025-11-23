<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'M. Febrian Syah', 'title' => 'About Us']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=> 'Blog', 'posts'=> [
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
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact Us']);
});