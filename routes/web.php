<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Sandhika Galih',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem, nostrum exercitationem asperiores
            aliquid accusamus id eum amet mollitia repellat quo et consequatur rerum velit non totam, fugiat impedit
            ipsa?'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Sandhika Galih',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, odio possimus corporis perferendis, sequi,
            inventore rerum architecto accusamus dolores assumenda nisi a! Modi optio suscipit, eos molestias odio at
            hic!'
        ]
    ];


    return view('posts', ['title' => 'Posts', 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
