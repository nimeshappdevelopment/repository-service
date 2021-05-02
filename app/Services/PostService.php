<?php

namespace App\PostService;

use App\Post;

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function savePostData($data)
    {
        //validations goes here
        $result = $this->postRepository->save($data);

        return $result;
    }
}
