<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Tag;
use App\Models\Review;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $courses = Course::search($data)->paginate(config('course.paginate'));
        $teachers = User::teachers()->get();
        $tags = Tag::all();

        return view('courses.index')->with(compact('courses', 'teachers', 'tags', 'data'));
    }
}
