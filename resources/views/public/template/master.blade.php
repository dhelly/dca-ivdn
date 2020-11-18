<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Satélite | IVDN</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @hasSection ('css')
        @yield('css')
    @endif

</head>

<body>

    @include('public.template.header')

    <div class="main_content mt-5">
        @yield('content')
    </div>

    @include('public.template.footer')

    <script src="{{ asset('js/app.js') }}"></script>

    @hasSection ('js')
        @yield('js')
    @endif
</body>

</html>
