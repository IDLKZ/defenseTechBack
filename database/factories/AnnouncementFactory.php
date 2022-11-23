<?php

namespace Database\Factories;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnouncementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Announcement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imageUrl' => $this->faker->text,
        'titleRu' => $this->faker->word,
        'titleKz' => $this->faker->word,
        'titleEn' => $this->faker->word,
        'subtitleRu' => $this->faker->text,
        'subtitleKz' => $this->faker->text,
        'subtitleEn' => $this->faker->text,
        'link' => $this->faker->text,
        'status' => $this->faker->word,
        'publishedAt' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
