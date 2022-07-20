<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->course = new Course();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['courses' => $this->course->showCourses()]);
    }

    public function test()
    {
        return view('test');
    }
}
