@extends('layouts.app')

@section('content')
<section class = "banner">
    <div class="banner-container">
        <div class="banner-content">
            <div class="banner-heading">
                <p class="banner-slogan">
                    Learn Anytime, Anywhere
                    <span class="slogan-title">at Hapo Learn <img src="{{ asset('images/cu.png') }}" alt="At Hapo"> !</span>
                </p>
            </div>
            <div class="banner-text">
                <p class="paragraph">
                    Interactive lessons, "on-the-go"
                    practice, peer support.
                </p>
            </div>
            <button class="banner-button">
                Start Learning Now!
            </button>
        </div>
    </div>
    <div class="bg"></div>
</section>
<section class="container">
    <div class="row">
        <div class="course one col-lg-4">
            <div class="card">
                <div class="row no-gutters">
                    <div class="card-img-top col-lg-12 col-md-4">
                        <div class="logo"></div>
                    </div>
                    <div class="card-body col-lg-12 col-md-8">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                            had
                            coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-hapo">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="course two col-lg-4">
            <div class="card">
                <div class="row no-gutters">
                    <div class="card-img-top col-lg-12 col-md-4">
                        <div class="logo"></div>
                    </div>
                    <div class="card-body col-lg-12 col-md-8">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                            had
                            coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-hapo">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="course three col-lg-4">
            <div class="card">
                <div class="row no-gutters">
                    <div class="card-img-top col-lg-12 col-md-4">
                        <div class="logo"></div>
                    </div>
                    <div class="card-body col-lg-12 col-md-8">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                            had
                            coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-hapo">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
