<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function __construct(
        private PostRepository $postRepository
    ) {
    }

    public function index(): View
    {
        $posts = $this->postRepository->getPostsByStatus(1);

        return view('posts.index',
            [
                'posts' => $posts
            ]
        );
    }

    public function show(Post $post): View
    {
        return view('posts.show',
            [
                'post' => $post
            ]
        );
    }
}
