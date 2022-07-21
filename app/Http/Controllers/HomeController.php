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
        $courses = Course::showListCourses(config('course.home_course_number'))->get();
        $otherCourses = Course::showListCourses(config('course.home_course_number'))->orderByField(config('course.order_by_field'), config('course.sort'))->get();
        $countLessons = Lesson::countTheNumberOfLessons()->count();
        $countCourses = Course::countTheNumberOfCourses()->count();
        $countLearners = UserCourse::countTheNumberOfLearners(config('user_course.select_field'))->groupByField(config('user_course.group_by_field'))->get()->count();
        $reviews = Review::showReviews(config('review.home_review_number'))->get();

        return view('home')->with(compact('courses', 'otherCourses', 'countLessons', 'countCourses', 'countLearners', 'reviews'));
    }

    public function test()
    {
        return view('test');
    }
}
