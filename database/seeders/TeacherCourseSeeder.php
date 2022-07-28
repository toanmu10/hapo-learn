<?php

namespace Database\Seeders;

use App\Models\TeacherCourse;
use Illuminate\Database\Seeder;

class TeacherCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherCourse::factory()->times(50)->create();
        // $courses = Course::all();
        // User::where('role', '=', '1')->each(function ($user) use ($courses) {
        //     $user->courses()->attach(
        //         $courses->random(rand(1, 3))->pluck('id')->toArray()
        //     );
        // });
    }
}
