@extends('layouts.app')

@section('content')

<section class="background-banner"></section>
<div class="container-fluid">
    <div class="row row-color">
        <div class="col-md-5 title">
            <div class="banner-title">
                Learn Anytime, Anywhere
                <div class="title-extra">
                    at HapoLearn
                    <img src="/images/owl.png" alt="haposhoft" class="title-img">
                    !
                </div>
            </div>
            <div class="title-content">
                Interactive lessons, "on the go" 
                <div class= "title-content--extra">
                    practice, peer support
                </div>
            </div>
            <div class="start">
                <button class="btn-start">
                    Start Learning Now!
                </button>
            </div>
        </div>
    </div>
</div>
<section class="course">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 card-distance mt-40 ">
                <div class="card border-course card-position card-shadow" >
                    <div class="row no-gutters">
                        <div class="img-custom card-one col-lg-12 col-md-4 border-radius-img"></div>
                        <div class="card-body col-lg-12 col-md-8 card-content">
                            <h5 class="card-title title-course" >HTML/CSS/js Tutorial</h5>
                            <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                            <a href="#" class="btn btn-course">Take This Course</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-distance">
                <div class="card border-course card-position card-shadow" >
                    <div class="row no-gutters">
                        <div class="img-custom card-two col-lg-12 col-md-4 border-radius-img"></div>
                        <div class="card-body col-lg-12 col-md-8 card-content">
                            <h5 class="card-title title-course" >LARAVEL Tutorial</h5>
                            <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                            <a href="#" class="btn btn-course">Take This Course</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-distance card-end ">
                <div class="card border-course card-position card-shadow" >
                    <div class="row no-gutters">
                        <div class="img-custom card-three col-lg-12 col-md-4 rounded-top-1"></div>
                        <div class="card-body col-lg-12 col-md-8 card-content">
                            <h5 class="card-title title-course" >PHP Tutorial</h5>
                            <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                            <a href="#" class="btn btn-course">Take This Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Other courses -->
        <div class="row justify-content-center">
            <div class="col-lg-6 other-courses-title">
                <p class="other-courses-text">Other courses</p>
            </div>
        </div>
        <div class="row other-card-position ">
            <div class="col-lg-4 card-distance">
                <div class="card border-course card-shadow" >
                    <div class="row no-gutters">
                        <div class="img-custom card-one col-lg-12 col-md-4 border-radius-img"></div>
                        <div class="card-body col-lg-12 col-md-8 card-content">
                            <h5 class="card-title title-course" >CSS Tutorial</h5>
                            <p class="card-text title-course-content">I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                            <a href="#" class="btn btn-course">Take This Course</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-distance">
                <div class="card border-course card-shadow" >
                    <div class="row no-gutters">
                    <div class="img-custom card-two col-lg-12 col-md-4 border-radius-img"></div>
                        <div class="card-body col-lg-12 col-md-8 card-content">
                            <h5 class="card-title title-course" >Ruby on rails Tutorial</h5>
                            <p class="card-text title-course-content"> I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                            <a href="#" class="btn btn-course">Take This Course</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-distance card-end">
                <div class="card border-course card-shadow" >
                    <div class="row no-gutters">
                        <div class="img-custom card-three col-lg-12 col-md-4 border-radius-img"></div>
                        <div class="card-body col-lg-12 col-md-8 card-content">
                            <h5 class="card-title title-course" >Ruby on rails Tutorial</h5>
                            <p class="card-text title-course-content"> I knew hardly anything about HTML, JS, and CSS before entering New Media,...</p>
                            <a href="#" class="btn btn-course">Take This Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 course-shows">
                View All Our Courses 
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
    </div>
</section>
@endsection
