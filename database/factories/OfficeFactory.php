<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Office::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thumbnail' => $this->faker->text,
        'imageUrl' => $this->faker->text,
        'alias' => $this->faker->word,
        'link' => $this->faker->word,
        'titleRu' => $this->faker->word,
        'titleKz' => $this->faker->word,
        'titleEn' => $this->faker->word,
        'subtitleRu' => $this->faker->text,
        'subtitleKz' => $this->faker->text,
        'subtitleEn' => $this->faker->text,
        'descriptionRu' => $this->faker->text,
        'descriptionKz' => $this->faker->text,
        'descriptionEn' => $this->faker->text,
        'location' => $this->faker->text,
        'phone' => $this->faker->text,
        'email' => $this->faker->text,
        'publishedAt' => $this->faker->date('Y-m-d H:i:s'),
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
