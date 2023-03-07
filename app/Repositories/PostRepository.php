<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository
{
    public function __construct(
        private readonly Post $model
    ) {
    }

    public function getPosts(): Collection
    {
        return $this->model->all();
    }

    public function getPostsByStatus(int $status): Collection
    {
        return $this->model->where('published', $status)->get();
    }
}
