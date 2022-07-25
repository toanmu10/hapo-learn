<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Review;
use App\Models\Lesson;
use App\Models\UserCourse;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::main()->get();
        $otherCourses = Course::other()->get();
        $countLessons = Lesson::count();
        $countCourses = Course::count();
        $countLearners = UserCourse::learner()->get()->count();
        $reviews = Review::main()->get();

        return view('home')->with(compact('courses', 'otherCourses', 'countLessons', 'countCourses', 'countLearners', 'reviews'));
    }
}
