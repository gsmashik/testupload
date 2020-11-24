@extends('layouts.layout')

@include('partials.topbarnavbar')
@include('partials.slider')

@include('partials.TopManagement')
@include('partials.flexbox')
@include('partials.clientslider')
@include('partials.filtergallary')
@include('partials.contactus')
@include('partials.footer')
@section('css')

<link rel="stylesheet" href="{{asset('asset/css/topbarnavbar.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/carosel.css')}}">

<link rel="stylesheet" href="{{asset('asset/css/hover2.css')}}">
<!-- filter gallary-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
<link rel="stylesheet" href="{{asset('asset/css/filtergallary.css')}}">

<link rel="stylesheet" href="{{asset('asset/css/clientslider.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/flexbox.css')}}">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.1/assets/owl.carousel.css'>

<link rel="stylesheet" href="{{asset('asset/css/contactus.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/footer.css')}}">
@endsection

@section('js')


<!-- filter gallary-->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js'></script>
 <script  src="{{ asset('asset/js/filtergallary.js') }}"></script>
<!-- Client Slider -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.1/owl.carousel.min.js'></script>
<script  src="{{ asset('asset/js/clientslider.js') }}"></script>
    @stop