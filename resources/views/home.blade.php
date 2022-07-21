@extends('layouts.app')

@section('content')

<section>
    <div class="background-banner"></div>
    <div class="container-fluid">
        <div class="row row-color">
            <div class="col-md-5 title">
                <div class="banner-title">
                    Learn Anytime, Anywhere
                    <div class="title-extra">
                        at HapoLearn
                        <img src="{{ asset('images/owl.png') }}" alt="haposhoft" class="title-img">
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
</section>
<section class="course">
    <div class="container">
        <div class="row course-list">
            @foreach($courses as $course)
            <div class="col-lg-4 card-distance mt-40 ">
                <div class="card border-course card-position card-shadow" >
                    <div class="row no-gutters">
                        <div class="col-lg-12 col-md-4 card-img">
                            <img class="border-radius-img img-course" src="{{$course['photo']}}" alt="">
                        </div>
                        <div class="card-body col-lg-12 col-md-8 card-content">
                            <h5 class="card-title title-course" >{{ $course->name }}</h5>
                            <p class="card-text title-course-content">{{ Str::limit($course->description, 100) }}</p>
                            <a href="#" class="btn btn-course">Take This Course</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 other-courses-title">
                <p class="other-courses-text">Other courses</p>
            </div>
        </div>
        <div class="row other-card-position other-course-list">
            @foreach($otherCourses as $otherCourse)
            <div class="col-lg-4 card-distance">
                <div class="card border-course card-shadow" >
                    <div class="row no-gutters">
                        <div class="col-lg-12 col-md-4 card-img">
                            <img class="border-radius-img img-course" src="{{$course->photo}}" alt="">
                        </div>
                        <div class="card-body col-lg-12 col-md-8 card-content">
                        <h5 class="card-title title-course">{{ $otherCourse->name }}</h5>
                            <p class="card-text title-course-content">{{ Str::limit($otherCourse->description, 100) }}</p>
                            <a href="#" class="btn btn-course">Take This Course</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 course-shows">
                View All Our Courses 
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
    </div>
</section>
<section class="why-bg">
    <div class="container-fluid ">
        <div class="row align-items-center ">
            <div class="col-lg-4 col-md-6 offset-lg-1 offset-md-0 why-content ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4 class="why-title">Why HapoLearn?</h4>
                        <div class="rotate-laptop">
                            <img src="{{ asset('images/rotate_lap.png') }}">
                        </div>
                    </div>
                </div>
                <div class="why-list">
                    <div class="why-item">
                        <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go" practice, peer support.</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go" practice, peer support.</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go" practice, peer support.</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go" practice, peer support.</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go" practice, peer support.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <img src="{{ asset('images/laptop.png') }}" alt="why" class="why-img">
            </div>
        </div>
    </div>
</section>
<section class="feedback">
    <div class="feedback-heading">
        <div class="title">Feedback</div>
        <div class="description">What other students turned professionals have to say about us after learning with us and reaching their goals</div>
    </div>
    <div class="container">
        <div class="slider">
            @foreach($reviews as $review)
            <div class="slider-item">
                <div class="slider-slogan">
                    {{ $review->message }}
                </div>
                <div class="slider-user">
                    @php
                        $avatar = is_null($review->user->avatar) ? '/images/avatar.png' : $review->user->avatar;
                    @endphp
                    <img src="{{ asset('images/avatar.png') }}" alt="" class="user-avatar">
                    <div class="user-info">
                        <div class="user-name">{{ $review->user->name }}</div>
                        <div class="user-language">{{ $review->course->name }}</div>
                        <div class="user-stars">
                        @php
                            $rates = $review->rate;
                        @endphp

                         @for ($i = 0; $i < $rates; $i++)
                            <i class="fa-solid fa-star user-star-icon"></i>
                        @endfor

                        @for ($i = 0; $i < 5 - $rates; $i++)
                            <i class="fa-regular fa-star user-star-icon"></i>
                        @endfor
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="container-fluid statistic">
    <div class="statistic-slogan">
        <div class="statistic-title">
            Become a member of our growing community!
        </div>
        <button class="btn-begin">
            Start Learning Now!
        </button>
    </div>
    <div class="row statistic-statistical">
        <div class="col-lg-12">
            <p class="statistic-heading">Statistic</p>
        </div>
        <div class="statistic-content col-lg-12">
            <div class="row">
                <div class="statistic-item col-lg-4 col-md-4">
                    <p class="statistic-name">Courses</p>
                    <p class="statistic-quantity">{{ $countCourses }}</p>
                </div>
                <div class="statistic-item col-lg-4 col-md-4">
                    <p class="statistic-name">Lessons</p>
                    <p class="statistic-quantity">{{ $countLessons }}</p>
                </div>
                <div class="statistic-item col-lg-4 col-md-4">
                    <p class="statistic-name">Learners</p>
                    <p class="statistic-quantity">{{ $countLearners}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
