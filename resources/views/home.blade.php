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
<section class="example">
    <div class="container">
        <div class="row">
            <div class="card course-item">
                <div class="img">
                    <img class="card-img-top card-img" src="{{ asset('images/html.png') }}" alt="Card image cap">
                </div>            
                <div class="card-body">
                    <p class="card-title">HTML/CSS/js Tutorial</p>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                    <a href="#" class="btn a">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
