<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo' => $this->faker->text,
        'link' => $this->faker->word,
        'titleRu' => $this->faker->word,
        'titleKz' => $this->faker->word,
        'titleEn' => $this->faker->word,
        'descriptionRu' => $this->faker->text,
        'descriptionKz' => $this->faker->text,
        'descriptionEn' => $this->faker->text,
        'location' => $this->faker->text,
        'phone' => $this->faker->text,
        'email' => $this->faker->text,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
