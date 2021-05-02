<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function save($data)
    {
        $post = new $this->post;
        $post->name = $data['name'];
        $post->save();

        return response()->json(['success' => 'success']);
    }
}
