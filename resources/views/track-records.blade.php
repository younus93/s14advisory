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
                    <option value="month">Date / Month</option>
                </select>
            </ul>

            <div class="filter-container">
                
                <div class="filtr-item "  data-category="1" data-month="1" >
                    <img src="/img/track-records/caz.png" alt="sample" />
                    <a href="/img/track-records/preview/caz-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="2, 1" data-month="2" >
                    <img src="/img/track-records/caz.png" alt="sample" />
                    <a href="/img/track-records/preview/caz-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="1, 3,4" data-month="3">
                    <img src="/img/track-records/caz.png" alt="sample" />
                    <a href="/img/track-records/preview/caz-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="1,4" data-month="4" >
                    <img src="/img/track-records/caz.png" alt="sample" />
                    <a href="/img/track-records/preview/caz-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="1, 4" data-month="5" >
                    <img src="/img/track-records/caz.png" alt="sample" />
                    <a href="/img/track-records/preview/caz-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="1,2" data-month="6" >
                    <img src="/img/track-records/caz.png" alt="sample" />
                    <a href="/img/track-records/preview/caz-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="1, 2,3" data-month="7" >
                    <img src="/img/track-records/caz.png" alt="sample" />
                    <a href="/img/track-records/preview/caz-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="1" data-month="8" >
                    <img src="/img/track-records/caz.png" alt="sample" />
                    <a href="/img/track-records/preview/caz-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
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
        filter.sort('month', 'desc');
    </script>
@endsection