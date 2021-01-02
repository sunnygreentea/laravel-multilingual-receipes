@extends('layouts.app')
@section('content')
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(../img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h1>{{ __('Delicious Homemade Recipes') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="top-catagory-area section-padding-80-0">
        <div class="container">
            <div class="row">
                @foreach ($recipes as $recipe)
                <div class="col-12 col-lg-6">
                    <div class="single-top-catagory">
                        <img src="{{ asset('img/recipe-'.$recipe->id.'.jpg')}}" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">

                            <h3>{{$recipe->title}}</h3>
                            <h6>{{ __('Simple and Delicious') }}</h6>
                            <a href="{{route('recipe', [$locale, $recipe->id])}}" class="btn delicious-btn">{{ __('See Full Recipe') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </section>

@endsection    