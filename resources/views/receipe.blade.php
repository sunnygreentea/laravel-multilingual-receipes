@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row mb-5">
        <div class="col-12">
            <div>
                <img src="{{ asset('img/receipe-'.$receipe->id.'.jpg') }}" alt="">
            </div>
        </div>
    </div>
        	
    <div class="row">
    	<div class="col-12 mb-4">
    		<h1 class="text-center">{{ $receipe->title}}</h1>
    	</div>
    	<br><hr><br>
        <div class="col-12 col-lg-4">
            <h2>{{ __('Ingredients') }}</h2>
            <p>{!! $receipe->ingredients !!}</p>
        </div>

        <div class="col-12 col-lg-8">
            <h2>{{ __('Directions') }}</h2>
            <p>{!! $receipe->directions !!}</p>
        </div>

        
    </div>

</div>


@endsection