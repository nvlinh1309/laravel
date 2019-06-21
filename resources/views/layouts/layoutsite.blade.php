<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}" >
    
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    <section class="clearfix header">
        <div class="container">
            HEADER
        </div>
    </section>

    <section class="clearfix mainmenu bg-demo">
        <div class="container">
            @include('frontend.sidebar-mainmenu')
        </div>
    </section>

    @yield('content')
    <section class="clearfix footer">
        <div class="container">
            FOOTER
        </div>
    </section>

    <section class="clearfix copyright py-3 bg-demo">
        <div class="container text-center text-white">
            Design by ABC
        </div>
    </section>

</body>
</html>