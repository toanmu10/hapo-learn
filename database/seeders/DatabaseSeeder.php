<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(UserCourseSeeder::class);
        $this->call(TeacherCourseSeeder::class);
        $this->call(CourseTagSeeder::class);
    }
}
