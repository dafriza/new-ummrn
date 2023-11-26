<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommunityPostsFactory extends Factory
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
            'communities_practice_id' => 1
        ];
    }

    function communityOfPractice($id) {
        return $this->state(function($attribute)use($id){
            return [
                'title' => $this->faker->sentence(3),
                'description' => $this->faker->paragraph(),
                'communities_practice_id' => $id
            ];
        });
    }
}
