<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Programming',
            'Web Developer',
            'Graphics Designer',
            'Gaming',
            'Personal'
        ];

        $slug = [
            'programming',
            'web-developer',
            'graphics-designer',
            'gaming',
            'personal'
        ];

        return [
            'name'=> $categories[shuffle($categories) != $slug],
            'slug'=> $slug[shuffle($slug) != $slug]
        ];
    }
}
