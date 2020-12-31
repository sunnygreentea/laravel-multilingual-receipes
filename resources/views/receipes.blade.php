@extends('layouts.app')
@section('content')
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(../img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h1>{{ __('Delicious Homemade Receipes') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="top-catagory-area section-padding-80-0">
        <div class="container">
            <div class="row">
                @foreach ($receipes as $receipe)
                <div class="col-12 col-lg-6">
                    <div class="single-top-catagory">
                        <img src="{{ asset('img/receipe-'.$receipe->id.'.jpg')}}" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">

                            <h3>{{$receipe->title}}</h3>
                            <h6>{{ __('Simple and Delicious') }}</h6>
                            <a href="{{route('receipe', [$locale, $receipe->id])}}" class="btn delicious-btn">{{ __('See Full Receipe') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </section>

@endsection    