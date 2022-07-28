<?php

namespace Database\Factories;

use App\Models\UserCourse;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserCourse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->randomElement(User::where('role', config('course.role_teacher'))->pluck('id')),
            "course_id" => $this->faker->randomElement(Course::pluck('id')),
        ];
    }
}
