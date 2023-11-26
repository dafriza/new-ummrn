<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurriculumVitaeFactory extends Factory
{
    public $user;
    public function definition()
    {
        return [
            'educations' => ['whatever'],
            'work_experiences' => ['whatever'],
            'organizational_experiences' => ['whatever'],
            'skills' => ['whatever'],
            'awards' => ['whatever'],
            'topics_of_researchs' =>['whatever'],
            'publications' => ['whatever'],
            'user_id' => $this->faker->randomDigit()
        ];
    }
    function lecture($id) {
        $lecture = User::find($id);
        return $this->state(function($attributes)use($lecture){
            return [
                'educations' => [
                    $this->faker->randomElement(['2005-2009 Bachelor in Informatics (S.Kom) - Designing a '.$this->faker->sentence(4),
                    '2006-2010 Bachelor in Informatics (S.Kom) - Designing a Model Structure '.$this->faker->sentence(4),
                    '2004-2008 Bachelor in Informatics (S.Kom) - Create a Web App '.$this->faker->sentence(4)]),
                    $this->faker->randomElement(['2011-2013 Master in Informatics (M.Kom) - Modeling and prototyping '.$this->faker->sentence(4),
                    '2010-2012 Master in Informatics (M.Kom) - Create Framework '.$this->faker->sentence(4),
                    '2011-2013 Master in Informatics (M.Kom) - Designing Application '.$this->faker->sentence(4)])
                ],
                'work_experiences' => [
                    $this->faker->randomElement(['Web Developer PHP','Designing Database System with PostgreSQL','Web Developer Backend','Fullstack Developer']),
                    $this->faker->randomElement(['Web Developer PHP','Designing Database System with PostgreSQL','Web Developer Backend','Fullstack Developer']),
                    $this->faker->randomElement(['Web Developer PHP','Designing Database System with PostgreSQL','Web Developer Backend','Fullstack Developer'])
                ],
                'organizational_experiences' => [
                    $this->faker->randomElement(['Head Division Software Group Malang','','Part Of TechnicianMan Malang']),
                    $this->faker->randomElement(['Head Division Software Group Malang','','Part Of TechnicianMan Malang'])
                ],
                'skills' => [
                    $this->faker->randomElement(['Design Database','Design Pattern Code','Design Tech App']),
                    $this->faker->randomElement(['Design Database','Design Pattern Code','Design Tech App']),
                    $this->faker->randomElement(['Design Database','Design Pattern Code','Design Tech App'])
                ],
                'awards' => [
                    $this->faker->randomElement(['1st Competition Software Developer Malang','3rd Designing Web App','2nd Design Tech App']),
                    $this->faker->randomElement(['1st Competition Software Developer Malang','3rd Designing Web App','2nd Design Tech App'])
                ],
                'topics_of_researchs' =>[
                    $this->faker->randomElement(['Information System','Knowledge Management','Reengineering','Software Developer']),
                    $this->faker->randomElement(['Information System','Knowledge Management','Reengineering','Software Developer']),
                    $this->faker->randomElement(['Information System','Knowledge Management','Reengineering','Software Developer']),
                    $this->faker->randomElement(['Information System','Knowledge Management','Reengineering','Software Developer']),
                ],
                'publications' => [
                $this->faker->randomElement([' '.$lecture->fullname.', '.$this->faker->lastName().', and '.$this->faker->firstName().', “Prototype of Knowledge Management System for the Higher Education Institution in Indonesia,” Semin. Nas. Apl. Tenologi Inf., pp. 6–12, 2013. ',
                ' '.$lecture->fullname.', '.$this->faker->lastName().', and '.$this->faker->firstName().', “Design Framework with 10x efficiency in Australia,” Semin. Nas. Apl. Tenologi Inf., pp. '.$this->faker->randomDigit().'–12, 2013. '])
                ],
                // 'user_id' => $lecture['id']
                'user_id' => $lecture->id
            ];
        });
    }
    function student($id) {
        $student = User::find($id);
        return $this->state(function($attributes)use($student){
            return [
                'educations' => [
                    $this->faker->randomElement(['2005-2009 SMK '.$this->faker->city(),
                    '2006-2010 SMA '.$this->faker->streetAddress(),
                    '2004-2008 Vocational High School '.$this->faker->country()])
                ],
                'work_experiences' => [
                    $this->faker->randomElement(['Web Developer PHP','Engineer at '.$this->faker->city(),'Entry Data at '.$this->faker->city(),'Fullstack Developer']),
                ],
                'organizational_experiences' => [
                    $this->faker->randomElement(['Member Osis','','Part Of TechnicianMan Malang']),
                ],
                'skills' => [
                    $this->faker->randomElement(['Design Database','Design Pattern Code','Design Tech App']),
                    $this->faker->randomElement(['Design Database','Design Pattern Code','Design Tech App']),
                ],
                'awards' => [
                    $this->faker->randomElement(['1st Competition Software Developer SMK '.$this->faker->city(),'3rd Designing Web App SMA '.$this->faker->city(),'2nd Design Tech App SMK '.$this->faker->city()]),
                ],
                'topics_of_researchs' =>[''],
                'publications' => [''],
                // 'user_id' => $student['id']
                'user_id' => $student->id
            ];
        });
    }
}
