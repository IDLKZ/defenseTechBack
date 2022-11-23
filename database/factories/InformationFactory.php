<?php

namespace Database\Factories;

use App\Models\Information;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Information::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo' => $this->faker->text,
        'sloganRu' => $this->faker->word,
        'sloganKz' => $this->faker->word,
        'sloganEn' => $this->faker->word,
        'descriptionRu' => $this->faker->text,
        'descriptionKz' => $this->faker->text,
        'descriptionEn' => $this->faker->text,
        'link' => $this->faker->text,
        'specific' => $this->faker->word,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
