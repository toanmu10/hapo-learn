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
            'courses' => $this->course->showCourses(3)->get(),
            'otherCourses' => $this->course->showOtherCourses(3)->orderByName('asc')->get(),
            'reviews' => $this->review->showReviews(6)->get(),
            'countCourses' => $this->course->countCourses()->get()->count(),
            'countLessons' => $this->lesson->countLessons()->get()->count(),
            'countUsers' => $this->userCourse->countLearners('user_id')->groupById('user_id')->get()->count()
        ]);
    }

    public function test()
    {
        return view('test');
    }
}
