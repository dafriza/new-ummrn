<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement([1,2,3]),
            'attachment' => $this->faker->imageUrl(640, 480, 'technology', true)
        ];
    }

    function lecture($id) {
        return $this->state(function($attribute)use($id){
            return [
                'title' => $this->faker->sentence(3),
                'description' => $this->faker->paragraph(),
                'status' => $this->faker->randomElement([1,2,3]),
                'attachment' => $this->faker->imageUrl(640, 480, 'technology', true),
                'user_id' => $id
            ];
        });
    }
}
