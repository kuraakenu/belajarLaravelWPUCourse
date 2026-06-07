<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Sandhika Galih',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem, nostrum exercitationem asperiores
            aliquid accusamus id eum amet mollitia repellat quo et consequatur rerum velit non totam, fugiat impedit
            ipsa?'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Sandhika Galih',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, odio possimus corporis perferendis, sequi,
            inventore rerum architecto accusamus dolores assumenda nisi a! Modi optio suscipit, eos molestias odio at
            hic!'
        ]
    ];


    return view('posts', ['title' => 'Posts', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Sandhika Galih',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem, nostrum exercitationem asperiores
            aliquid accusamus id eum amet mollitia repellat quo et consequatur rerum velit non totam, fugiat impedit
            ipsa?'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Sandhika Galih',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, odio possimus corporis perferendis, sequi,
            inventore rerum architecto accusamus dolores assumenda nisi a! Modi optio suscipit, eos molestias odio at
            hic!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) abort(404);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
