@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endsection

@section('content')
    <div class="track-records-bg swiper-main-slider-fade swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="">
                    <div class="slider-content center-holder">
                        <div class="watery-heading extra-light animated fadeInDown">
                            <h1>Track Records</h1>
                        </div>
                        <div class="main-heading animated fadeInUp">
                            <h2 class=" sub-head1">Our Clients</h2>
                            <!-- <h2 class="sub-head2">Our Deals</h2> -->
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('clients')

    <section class="our-deals">
        <h2 class="heading text-center">Our Deals</h2>
        <div class="container for-large-window">
            <ul class="filter-btn-grps">
                <!-- For filtering controls add -->
                <li class='filter-btn active' data-filter="all"> All</li>
                <li class='filter-btn' data-filter="1">Initial Public Offering(IPO)</li>
                <li class='filter-btn' data-filter="2">Financial Advisor(FA)</li>
                <li class='filter-btn' data-filter="3">Independent Financial Advisor(IFA)</li>
                <li class='filter-btn' data-filter="4">Valuation</li>
                <!-- For a shuffle control add -->
                <!-- <li class='filter-btn' data-shuffle> Shuffle items </li> -->
                <!-- For sorting controls add -->
                <li class='filter-btn' data-sortAsc> 
                    <i class="fa fa-arrow-up"></i>Year
                </li>
                <li class='filter-btn' data-sortDesc>
                    <i class="fa fa-arrow-down"></i>Year
                </li>
                <!-- To choose the value by which you want to sort add -->
                <select hidden class='filter-btn' data-sortOrder>
                    <option value="year">Year</option>
                </select>
            </ul>

            <div class="filter-container">
                @foreach($clientsRecord as $slug => $record)
                    <div class="filtr-item for-large-window"  data-category="{{ $record['category'] }}" data-year="{{ $record['year']  }}" >
                        <img src="{{ __($record['url']) }}" alt="" class="w-100 h-100"/>
                        <a href="{{ __($record['preview']) }}" data-fancybox="images" data-caption="">
                            <div class="preview-link">
                                <div class="outer-round">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/buttonbs/filterizr/2.2.4/jquery.filterizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function (){
            $('.filter-btn-grps .filter-btn').click(function(){
                    $('.filter-btn').removeClass("active");
                    $(this).addClass("active");
            })
            var filter = $('.filter-container').filterizr({
            })
            $('header').css({
                'position' : "absolute",
                'width' : "100%"
            })
            window.setInterval(function(){
                changeText();
            }, 5000);
            function changeText(){
                $('.slider-content .main-heading h2').animate({'opacity': 1, 'transition' : 'all 0.5s' }, 4000, function () {
                    $(this).text('Our Deals');
                }).animate({'opacity': 1, 'transition' : 'all 0.5s' }, 4000, function () {
                    $(this).text('Our Clients');
                })
            }

            $('.navigation-fixed-wrapper').addClass('white-bg-remove')

            var scroll_width = $(window).innerWidth();
            // alert(scroll_width)
            if(scroll_width < 575){
                $('.navigation-fixed-wrapper').removeClass('white-bg-remove')   
            }
        })
        $(document).scroll(function(){
            var scroll = $(window).scrollTop();
    
            if(scroll > 30){
                $('.navigation-fixed-wrapper').removeClass('white-bg-remove')
            }
            else{
                $('.navigation-fixed-wrapper').addClass('white-bg-remove')
            }
        })
    </script>
@endsection