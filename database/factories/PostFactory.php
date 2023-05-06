<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->title,
            'slug' => $this->faker->slug,
            'content' => $this->faker->text,
            'cover_path' => 'ack4bD2WJAZ3iVLB1fZfUcbusGKddm-metaZGVsbWFzX3N0YWdlX3Byb2plY3QucG5n-.png',
            'published' => 1,
        ];
    }
}
