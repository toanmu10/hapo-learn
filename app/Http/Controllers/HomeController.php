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
        $courses = Course::showCourses(config('course.number_course'))->get();

        $otherCourses = Course::showOtherCourses(config('course.number_course'), config('course.sort_low_to_high'))->get();

        $countLessons = Lesson::countLessons()->count();

        $countCourses = Course::countCourses()->count();

        $countUsers = UserCourse::countLearners(config('user_course.select_field'))->groupByField(config('user_course.group_by_field'))->get()->count();

        $reviews = Review::showReviews(config('review.number_review'))->get();

        return view('home')->with(compact('courses', 'otherCourses', 'countLessons', 'countCourses', 'countUsers', 'reviews'));
    }

    public function test()
    {
        return view('test');
    }
}
