@extends('layouts.app')

@section('content')

<section>
    <div class= "banner">
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
    <div class="bg"></div>
</section> 

<section class="example">
    
</section>
@endsection
