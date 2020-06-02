<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

       <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
       <script src="{{ asset('js/app.js') }}" defer></script>

       {{-- Font --}}
       <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
       
       {{-- Bootstarp 4 --}}
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">        
       {{-- Bootstarp JS, Popper.js, and jQuery --}}
               <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
               <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
       {{-- CSS --}}
               <link rel="stylesheet" type="text/css" href={{asset('CSS/style.css')}}>
               <link rel="stylesheet" type="text/css" href={{asset('CSS/home_style.css')}}>
       {{-- ckedito --}}      
               <script src="{{asset('js/ckeditor.js')}}"></script>
</head>
<body>
<div id="app">

    @include('inc.navbar')
<br>
    <div id="container">
            @include('inc.messages')
            @yield('content')
    </div>

        <footer><p>&copy;2020 Geek Head Site. All Rights Reserved | Design by <a href="#" target="_blank">JomanaEL</a></p></footer>
    </div>

            <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
            </script>
</body>
</html>
