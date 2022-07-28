<?php

namespace Database\Factories;

use App\Models\TeacherCourse;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeacherCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeacherCourse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->randomElement(User::where('role', '=', '1')->pluck('id')),
            "course_id" => $this->faker->randomElement(Course::pluck('id')),
        ];
    }
}
