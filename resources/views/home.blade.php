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
</section>
@endsection
