@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endsection

@section('content')
    <div class="track-records-bg">
        <!-- <div class="watery-heading">
            <h1>Track Records</h1>
        </div>
        <div class="main-heading">
            <h2>Track Records</h2>
        </div> -->
    </div>
    
    @include('clients')

    <section class="our-deals ">
        <h2 class="heading text-center">Our Deals</h2>
        <div class="container">
            <ul class="filter-btn-grps">
                <!-- For filtering controls add -->
                <li class='filter-btn active' data-filter="all"> All</li>
                <li class='filter-btn' data-filter="1">IPO</li>
                <li class='filter-btn' data-filter="2">Financial Advisor</li>
                <li class='filter-btn' data-filter="3">Independent Financial Advisor</li>
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
                <select class='filter-btn' data-sortOrder>
                    <option value="year">Year</option>
                </select>
            </ul>

            <div class="filter-container">
                @foreach($clientsRecord as $slug => $record)
                    <div class="filtr-item" data-category="{{ $record['category'] }}" data-year="{{ $record['year']  }}" >
                        <img src="{{ $record['url'] }}" alt="" />
                        <a href="{{ $record['preview'] }}" data-fancybox="images" data-caption="">
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
    <!-- <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/buttonbs/filterizr/2.2.4/jquery.filterizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        $('.filter-btn-grps .filter-btn').click(function(){
                $('.filter-btn').removeClass("active");
                $(this).addClass("active");
        })
        var filter = $('.filter-container').filterizr({
        })
        filter.sort('year', 'desc');
    </script>
@endsection