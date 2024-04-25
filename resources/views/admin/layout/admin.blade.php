<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Microsoft Visio </title>
    <!-- meta tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="distribution" content="global" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap') }}"
        rel="stylesheet">
    <link id="favicon" rel="icon" type="images/favicon.png" href="{{ asset('images/favicon.png') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body @if (Config::get('app.locale') == 'ar') id="move-left-to-right" @endif>


    <div class="main_wrapper">
        @include('admin.layout.inc.header')
        @include('admin.layout.inc.sidebar')
        @yield('content')

    </div>


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>
<script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
{{-- Form jquery cdn --}}
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js') }}"
    integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- bootstrap cdn --}}
<script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js') }}"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js') }}"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>


@yield('scripts')
</html>
