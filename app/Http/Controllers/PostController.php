<?php

namespace App\Http\Controllers;

use App\PostService\PostService;
use App\Services\PostService as ServicesPostService;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(ServicesPostService $PostService)
    {
        $this->postService = $PostService;
    }
    public function store(Request $request)
    {

        $data = $request->only([
            'name'
        ]);
        $result = ['status' => 200];

        try {
            $result['data'] = $this->postService->savePostData($data);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        return response()->json($result, $result['status']);
    }
}
