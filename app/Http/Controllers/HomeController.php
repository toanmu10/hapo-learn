<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Review;
use App\Models\Lesson;
use App\Models\UserCourse;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->course = new Course();
        $this->review = new Review();
        $this->lesson = new Lesson();
        $this->userCourse = new UserCourse();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'courses' => $this->course->showCourses(),
            'reviews' => $this->review->showReviews(),
            'countCourses' => $this->course->countCourses(),
            'countLessons' => $this->lesson->countLessons(),
            'countUsers' => $this->userCourse->countLearners()
        ]);
    }

    public function test()
    {
        return view('test');
    }
}
