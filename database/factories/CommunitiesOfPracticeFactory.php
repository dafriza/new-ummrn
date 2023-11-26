<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommunitiesOfPracticeFactory extends Factory
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
            'member' => [User::role('student')->get()->random(),User::role('student')->get()->random(),User::role('student')->get()->random()],
        ];
    }

    function lecture($id)
    {
        $lecture = User::find($id);
        return $this->state(function ($attributes) use ($lecture) {
            return [
                'title' => $this->faker->sentence(3),
                'description' => $this->faker->paragraph(),
                'member' => [User::role('student')->get()->random(),User::role('student')->get()->random(),User::role('student')->get()->random()],
                'author' => $lecture->id
            ];
        });
    }
}
