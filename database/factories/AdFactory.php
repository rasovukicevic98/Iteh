<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;
use App\Models\Ad;
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'headline'=>$this->faker->title(),

            'slug'=>$this->faker->slug(),
            'excerpt'=>$this->faker->sentence(),
            'user_id'=>User::factory(),
            'category_id'=>Category::factory(),



        ];
    }
}
