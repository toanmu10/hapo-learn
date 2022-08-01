<?php

namespace Database\Factories;

use App\Models\CourseTag;
use App\Models\Course;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourseTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "course_id" => $this->faker->randomElement(Course::pluck('id')),
            "tag_id" => $this->faker->randomElement(Tag::pluck('id')),
        ];
    }
}
