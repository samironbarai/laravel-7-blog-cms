<?php

use App\Post;

function getPages()
{
    $pages = Post::where('post_type', 'page')->where('is_published', '1')->get();
    return $pages;
}