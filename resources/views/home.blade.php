@extends('layouts.app')

@section('content')

<section class= "banner">
    <div class="banner__content">
        <div class="banner__content__title">
            <h1>Learn Anytime, Anywhere</h1>
            <h1>at HapoLearn<img class="logo-cu" src="{{ asset('images/cu.png') }}" alt="HapoLearn Logo">!</h1>
        </div>
        <div class="banner__content__content">
            <p>Interactive lessons, "on-the-go" practice, peer support</p>
        </div>
        <button class="btn-start">Start learn now !</button>
        </div>
    </div> 
</section>

<section class="example">
    <div class="bg"></div>
    <div class="courses__items--primary">
        <div class="courses__items--primary-item">
            <div class="item__thumb">
                <img class="thumb-image" src="{{ asset('images/html.png') }}" alt="HapoLearn Logo">
            </div>
            <div class="item__content">
                <p class="item__content__title">HTML/CSS/js Tutorial</p>
                <p class="item__content__description">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <button class="btn-add">Take this course</button>
            </div>
        </div>
        <div class="courses__items--primary-item">
            <div class="item__thumb">
                <img class="thumb-image" src="{{ asset('images/laravel.png') }}" alt="HapoLearn Logo">
            </div>
            <div class="item__content">
                <p class="item__content__title">LARAVEL Tutorial</p>
                <p class="item__content__description">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <button class="btn-add">Take this course</button>
            </div>
        </div>
        <div class="courses__items--primary-item">
            <div class="item__thumb">
                <img class="thumb-image" src="{{ asset('images/php.png') }}" alt="HapoLearn Logo">
            </div>
            <div class="item__content">
                <p class="item__content__title">PHP Tutorial</p>
                <p class="item__content__description">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <button class="btn-add">Take this course</button>
            </div>
        </div>
    </div>
</section>
@endsection
