<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    /**
     * The name of the factory's corresponding model. 
     * 
     * @var string
     */

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(5, 10), true),
            'content' => $this->faker->sentence(5, true),
            'image' => 'https://via.placeholder.com/1000',
        ];
    }
}