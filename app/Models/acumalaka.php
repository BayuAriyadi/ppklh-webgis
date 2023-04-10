<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'First blog post',
            'slug' => 'first-blog-post',
            'author' => 'Muhammad Bayu Ariyadi',
            'posts' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident soluta libero animi adipisci, earum molestias magni cupiditate eveniet dignissimos ea quas ipsa vero perferendis incidunt voluptatibus inventore accusantium id placeat.'
        ],
        [
            'title' => 'Seccond blog post tes',
            'slug' => 'second-blog-post',
            'author' => 'Muhammad Bayu Ariyadi',
            'posts' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi optio, iure praesentium ipsam vero at inventore eos soluta natus adipisci, dignissimos aut velit perspiciatis tempora, similique ratione quasi hic est rem dolorum dolore ipsum! Mollitia expedita, quas sapiente harum dignissimos eveniet doloremque ab natus maxime fugiat est aliquid qui modi, accusantium aut totam blanditiis placeat odit quam, animi et impedit quod quidem. Voluptatibus blanditiis sunt perspiciatis, animi ullam sequi ad soluta nulla voluptatem recusandae, tempore ipsa dolores modi aliquid provident.'
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
