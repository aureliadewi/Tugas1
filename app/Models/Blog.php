<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog 
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul post pertama",
            "author" => "Aurelia Dewi",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem architecto placeat eius consectetur voluptate quisquam itaque maiores, nostrum quia iure! Sequi possimus nisi neque, aspernatur totam iste rerum dolor repudiandae aut, ducimus facilis debitis recusandae at, fugit itaque quaerat labore officia dicta maxime quod nobis. Corporis ullam quam reiciendis voluptatem possimus accusantium ea magnam asperiores quidem, eum nam ex nobis eos facilis et. Sequi nesciunt officiis error reiciendis autem, fugiat, ullam deserunt eveniet impedit accusantium veniam sed facere, ipsam adipisci fuga iure totam soluta tempora repellat quis rerum placeat dicta molestiae consectetur! Eligendi voluptate at placeat excepturi, ipsa a est. "
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul post kedua",
            "author" => "Mashinta",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem architecto placeat eius consectetur voluptate quisquam itaque maiores, nostrum quia iure! Sequi possimus nisi neque, aspernatur totam iste rerum dolor repudiandae aut, ducimus facilis debitis recusandae at, fugit itaque quaerat labore officia dicta maxime quod nobis. Corporis ullam quam reiciendis voluptatem possimus accusantium ea magnam asperiores quidem, eum nam ex nobis eos facilis et. Sequi nesciunt officiis error reiciendis autem, fugiat, ullam deserunt eveniet impedit accusantium veniam sed facere, ipsam adipisci fuga iure totam soluta tempora repellat quis rerum placeat dicta molestiae consectetur! Eligendi voluptate at placeat excepturi, ipsa a est. "
           
        ]
        ];
    
    public static function all()
    {
        return self::$blog_posts;
    }
    public static function getBySlack($slack)
    {
        foreach (self::$blog_posts as $post) {
            if ($post['slug'] === $slack) {
                return $post;
            }
        }
        return null; //Return null jika tidak ditemukan
    }
}
