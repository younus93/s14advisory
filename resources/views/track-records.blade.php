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
                <div class="filtr-item "  data-category="1" data-year="2019" >
                    <img src="/img/track-records/eng/normal/caz.png" alt="" />
                    <a href="/img/track-records/eng/preview/caz-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2017" >
                    <img src="/img/track-records/eng/normal/accelence-1.png" alt="" />
                    <a href="/img/track-records/eng/preview/accelence-preview1.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2019">
                    <img src="/img/track-records/eng/normal/accelence-2.png" alt="" />
                    <a href="/img/track-records/eng/preview/accelence-preview2.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2019" >
                    <img src="/img/track-records/eng/normal/accelence-3.png" alt="" />
                    <a href="/img/track-records/eng/preview/accelence-preview3.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2017" >
                    <img src="/img/track-records/eng/normal/aq-estate.png" alt="" />
                    <a href="/img/track-records/eng/preview/aq-estate-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2020" >
                    <img src="/img/track-records/eng/normal/bafs.png" alt="" />
                    <a href="/img/track-records/eng/preview/bafs-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="2" data-year="2017" >
                    <img src="/img/track-records/eng/normal/blisstel-1.png" alt="" />
                    <a href="/img/track-records/eng/preview/blisstel-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2017" >
                    <img src="/img/track-records/eng/normal/blisstel-valuation.png" alt="" />
                    <a href="/img/track-records/eng/preview/blisstel-valuation-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="filtr-item" data-category="3" data-year="2017" >
                    <img src="/img/track-records/eng/normal/country.png" alt="" />
                    <a href="/img/track-records/eng/preview/country-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="3" data-year="2017" >
                    <img src="/img/track-records/eng/normal/cpl-1.png" alt="" />
                    <a href="/img/track-records/eng/preview/cpl-preview1.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="3" data-year="2017" >
                    <img src="/img/track-records/eng/normal/cpl-2.png" alt="" />
                    <a href="/img/track-records/eng/preview/cpl-preview2.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="filtr-item" data-category="2" data-year="2019" >
                    <img src="/img/track-records/eng/normal/digital-tech.png" alt="" />
                    <a href="/img/track-records/eng/preview/digital-tech-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2020" >
                    <img src="/img/track-records/eng/normal/eason.png" alt="" />
                    <a href="/img/track-records/eng/preview/eason-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2016" >
                    <img src="/img/track-records/eng/normal/eic.png" alt="" />
                    <a href="/img/track-records/eng/preview/eic-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="3" data-year="2018" >
                    <img src="/img/track-records/eng/normal/food-capitals-1.png" alt="" />
                    <a href="/img/track-records/eng/preview/food-capitals-preview1.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="3" data-year="2019" >
                    <img src="/img/track-records/eng/normal/food-capitals-2.png" alt="" />
                    <a href="/img/track-records/eng/preview/food-capitals-preview2.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="filtr-item" data-category="2" data-year="2015" >
                    <img src="/img/track-records/eng/normal/general-beverage.png" alt="" />
                    <a href="/img/track-records/eng/preview/general-beverage-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div> 
                <div class="filtr-item" data-category="2" data-year="2019" >
                    <img src="/img/track-records/eng/normal/hydrotek.png" alt="" />
                    <a href="/img/track-records/eng/preview/hydrotek-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div> 
                <div class="filtr-item" data-category="4" data-year="2017" >
                    <img src="/img/track-records/eng/normal/itc-1.png" alt="" />
                    <a href="/img/track-records/eng/preview/itc-preview1.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2019" >
                    <img src="/img/track-records/eng/normal/itc-2.png" alt="" />
                    <a href="/img/track-records/eng/preview/itc-preview2.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="filtr-item" data-category="4" data-year="2019" >
                    <img src="/img/track-records/eng/normal/itm-1.png" alt="" />
                    <a href="/img/track-records/eng/preview/itm-preview1.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2019" >
                    <img src="/img/track-records/eng/normal/itm-2.png" alt="" />
                    <a href="/img/track-records/eng/preview/itm-preview2.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="filtr-item" data-category="4" data-year="2017" >
                    <img src="/img/track-records/eng/normal/itm-3.png" alt="" />
                    <a href="/img/track-records/eng/preview/itm-preview3.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="filtr-item" data-category="1" data-year="2019" >
                    <img src="/img/track-records/eng/normal/kunalai.png" alt="" />
                    <a href="/img/track-records/eng/preview/kunalai-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2016" >
                    <img src="/img/track-records/eng/normal/nathalin.png" alt="" />
                    <a href="/img/track-records/eng/preview/nathalin-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="3" data-year="2019" >
                    <img src="/img/track-records/eng/normal/prime.png" alt="" />
                    <a href="/img/track-records/eng/preview/prime-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="filtr-item" data-category="2" data-year="2015" >
                    <img src="/img/track-records/eng/normal/pylon.png" alt="" />
                    <a href="/img/track-records/eng/preview/pylon-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="2" data-year="2016" >
                    <img src="/img/track-records/eng/normal/siam.png" alt="" />
                    <a href="/img/track-records/eng/preview/siam-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="3" data-year="2017" >
                    <img src="/img/track-records/eng/normal/takuni.png" alt="" />
                    <a href="/img/track-records/eng/preview/takuni-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2020" >
                    <img src="/img/track-records/eng/normal/tu-property.png" alt="" />
                    <a href="/img/track-records/eng/preview/tu-property-preview.png" data-fancybox="images" data-caption="My caption">
                        <div class="preview-link">
                            <div class="outer-round">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filtr-item" data-category="4" data-year="2019" >
                    <img src="/img/track-records/eng/normal/world-united-logistic.png" alt="" />
                    <a href="/img/track-records/eng/preview/world-united-logistic-preview.png" data-fancybox="images" data-caption="My caption">
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
        filter.sort('year', 'desc');
    </script>
@endsection