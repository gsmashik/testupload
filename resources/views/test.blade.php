<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{mix('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true">
    @livewireStyles


</head>
<body>
<a class="navbar-item" href="{{route('home')}}" data-turbolinks="true">
Docs
</a>
<script defer src="{{ mix('js/app.js') }}"></script>
@livewireScripts

</body>
</html>