<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

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
        $title = $this->faker->realText(20);
        return [
            'title' => $this->faker->realText(20),
            'body' => $this->faker->text(100),
            'slug' => Str::slug($title),
            'user_id' => User::factory()->create()->id,
            'published_at' => Carbon::now(),
        ];
    }
}
