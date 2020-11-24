<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Style -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{{mix('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true">
        @livewireStyles
        @yield('css')
</head>
<body>
@yield('content')

<!-- Script  -->
    <script defer src="{{ mix('js/app.js') }}"></script>
    @livewireScripts   
    @yield('js')
<!-- Script END -->

</body>
</html>