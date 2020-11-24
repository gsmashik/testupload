@extends('layouts.layout')
@include('partials.topbarnavbar')
@section('css')
<link rel="stylesheet" href="{{asset('asset/css/topbarnavbar.css')}}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="http://fizbd.com/wp-content/themes/fizbd/fancybox/jquery.fancybox.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
@endsection


@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{asset('asset/js/mould.js')}}"></script>

@endsection


</body>
</html>