@extends('layouts.app')

@section('head')
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">--}}
@endsection
@section('content')

    <div class="swiper-main-slider-fade swiper-container" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide black-overlay-40" style="background-image:url(img/banner.jpeg);">
                <div class="container">
                    <div class="slider-content center-holder">
                        <h3 class="extra-light animated fadeInDown">
                            <img src="/img/logos/logo.png" style="max-height: 200px;" alt="">
                        </h3>
                        {{--<h4 class="light animated fadeInDown">Company Limited</h4>--}}
                        <h5 class="animated fadeInUp">The SEC – Approved Financial Advisor.</h5>
                        {{--<div class="animated fadeInUp mt-30"><a href="#" class="white-button-bordered semi-rounded button-md w-300">Purchase Now</a> </div>--}}
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="swiper-button-next"></div>--}}
        {{--<div class="swiper-button-prev"></div>--}}
        {{--<div class="swiper-pagination"></div>--}}
    </div>


    @include('about')

    @include('values1')

    @include('services1')

    @include('team')

    @include('contact')

@endsection
@section('scripts')

@endsection


