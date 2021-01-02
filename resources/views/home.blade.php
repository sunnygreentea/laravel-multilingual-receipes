@extends('layouts.app')
@section('content')

<div class="container">
	<div class="home-bg"  style="background-image: url(img/bg.jpg);">
		<div class="row h-100 align-items-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="home-content" >
                    <h2>{{ __('Delicious Homemade Recipes') }}</h2>
                    <p >{{ __ ('Find the perfect food and drink ideas for every ocassion, from weeknight dinners to holiday feasts.')}}</p>
                    <a href="{{route('recipes', $locale)}}" class="btn delicious-btn">{{ __('See Recipes') }}</a>
                </div>
            </div>
        </div>
	</div>
</div>

@endsection