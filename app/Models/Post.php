<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }


    public static function find($slug)
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}
