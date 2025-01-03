<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nudge>
 */
class NudgeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = Str::random();
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'content' => Str::random(),
            'code' => Str::random(),
            'validated' => false,
            'user_id' => User::factory(),
        ];
    }
}
