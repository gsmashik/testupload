@extends('layouts.layout')
@include('partials.topbarnavbar')
@section('css')
<link rel="stylesheet" href="{{asset('asset/css/topbarnavbar.css')}}">

@endsection


@section('js')
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0) 
}, 4000);
</script>
@endsection


</body>
</html>