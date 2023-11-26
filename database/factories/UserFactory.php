<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => Str::lower($this->faker->firstName()),
            'password' => Hash::make('1'),
            'fullname' => $this->faker->firstName() .' '. $this->faker->lastName(),
            'alamat' => $this->faker->address(),
            'bidang_keilmuan' => $this->faker->randomElement(['Sistem Informasi','Rekayasa Perangkat Lunak', 'Jaringan']),
            'keahlian' => $this->faker->randomElement(['Web Developer', 'Technician', 'Security']),
            'email' => $this->faker->unique()->safeEmail(),
            'foto' => $this->faker->imageUrl(480, 480, 'human', true)
        ];
    }
}
