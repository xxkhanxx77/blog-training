<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Blog | @yield('title')</title>
    <link   href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
    @include('partials.navbar',['variable' =>'1'])
    <br>
    @yield('content')
</div>
</body>
</html>