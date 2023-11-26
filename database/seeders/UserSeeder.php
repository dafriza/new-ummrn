<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use App\Models\CurriculumVitae;
use Illuminate\Database\Seeder;
use App\Models\CommunitiesOfPractice;
use App\Models\CommunityPosts;
use App\Models\Project;
use Database\Factories\CurriculumVitaeFactory;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        User::factory()
            ->count(20)
            ->create()
            ->each(function ($user) use ($faker) {
                $role = $faker->randomElement(['student', 'lecture']);
                $user->assignRole($role);
                if ($role == 'student') {
                    CurriculumVitae::factory()
                        ->student($user->id)
                        ->create();
                } elseif ($role == 'lecture') {
                    $community = CommunitiesOfPractice::factory()
                        ->lecture($user->id)
                        ->create()
                        ->each(function ($community) {
                            CommunityPosts::factory()
                                ->communityOfPractice($community->id)
                                ->create();
                        });
                    // dd($community->id);
                    CurriculumVitae::factory()
                        ->lecture($user->id)
                        ->create();
                    Project::factory()
                        ->lecture($user->id)
                        ->create();
                }
            });
    }
}
