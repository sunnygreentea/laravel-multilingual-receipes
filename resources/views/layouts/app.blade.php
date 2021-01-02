<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Laravel Multilangual</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header class="header-area">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Logo -->
            <a class="nav-brand mr-5" href="{{route('home', $locale)}}"><img src="{{asset('img/logo.png')}}" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mx-5 {{request()->is($locale) ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('home', $locale)}}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item  {{request()->is($locale.'/recipes') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('recipes', $locale)}}">{{ __('Recipes') }}</a>
                    </li>
                    
                </ul>

                <span class="navbar-text mr-5">
                   <a class="btn @if ($locale=='en') btn-info @endif" href="{{getLocaleChangerURL('en')}}" class="mr-2"> English</a>
                   <a class="mr-2 btn @if ($locale=='fr') btn-info @endif" href="{{getLocaleChangerURL('fr')}}">French</a>
                </span>

            </div>
        </nav>
    </header>

    @yield("content")

    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 text-center">
                    FOOTER
                </div>
            </div>
        </div>
    </footer>
   
</body>

</html>
