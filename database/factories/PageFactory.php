<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => ($title = \str_replace(['.'], '', $this->faker->unique()->sentence(rand(2, 4)))),
            'slug' => \Str::slug($title),
            'subtitle' => $this->faker->name(),
            'page_content' => implode(
                \PHP_EOL,
                array_map(
                    fn ($value) => htmlentities("<p>{$value}</p>"),
                    $this->faker->paragraphs(7),
                    []
                )
            ),
            'collumns' => 1,
            'protected' => !!(rand(0, 1)),
            'active' => !!(rand(0, 1)),
        ];
    }
}
