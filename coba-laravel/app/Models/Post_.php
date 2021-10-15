<?php

namespace App\Models;

use PhpParser\ErrorHandler\Collecting;

class Post 
{
  private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Elti Rahmawati",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Tempore blanditiis fuga minus sit dicta ex architecto laboriosam facere, 
        maiores itaque a perspiciatis velit harum, error iure? Voluptatem hic 
        aliquid iste eveniet facilis voluptates provident. Aspernatur dolore ad deleniti, 
        dolorem labore et minima expedita. Eum eaque harum excepturi voluptates, consectetur
        architecto minima pariatur sit itaque vel temporibus. Provident ea neque id et
        doloremque, voluptates expedita itaque aspernatur vel dolor quam
        eligendi vero beatae nostrum, nihil maiores unde voluptate molestias consequatur ut."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Poetri",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, 
        ex dolor tempore est quam inventore omnis voluptate doloremque reprehenderit quibusdam 
        ea ab at. Fuga quidem eum possimus vitae tempore dignissimos voluptas 
        commodi in deleniti! Esse velit praesentium eos porro. Nam delectus veniam 
        aliquid totam expedita, earum iusto facilis cumque voluptatibus modi quibusdam 
        officia sunt magnam ipsa ut ab vero omnis esse excepturi explicabo. Animi, 
        vero eaque odit nobis sunt autem maiores fugiat vitae, nostrum ullam adipisci 
        voluptatem facere eius porro repellendus omnis sapiente, laboriosam quas 
        provident! Libero, delectus similique provident consectetur, 
        aliquid exercitationem, iste itaque impedit vitae rerum vel quos?"
    ]
]; 

public static function all() {
    return collect(self::$blog_posts);
}

public static function find($slug) {
    $posts = static::all();

    return $posts->firstWhere('slug', $slug);
}
}
