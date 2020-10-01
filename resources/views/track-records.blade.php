@extends('layouts.app')

@section('head')

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
    <!-- <div class="swiper-main-slider-fade swiper-container" id="">
        <div class="swiper-wrapper">
            <div class="swiper-slide black-overlay-40" style="background-image:url(img/sample-bg.jpg);">
                <div class="container">
                    <div class="slider-content center-holder">                       
                        <h1>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    @include('clients')

    <section class="our-deals">
        <h2 class="heading text-center">Our Deals</h2>

        <div class="deals-filter m-0">
            <div class="button-group filters-button-group text-center my-3 col-md-2">
                <button class="button is-checked" data-filter="*">show all</button>
                <button class="button" data-filter=".2018-Present">2018 - Present</button>
                <button class="button" data-filter=".2015-2017">2015 - 2017</button>
                <button class="button" data-filter=".2012-2014">2012 - 2014</button>
                <button class="button" data-filter=".2009-2011">2009 - 2011</button>
                <button class="button" data-filter=".2006-2008">2006 - 2008</button>
            </div>
            <!-- <div class="row">
                <div class="container">
                    <div class="grid row">
                  
                        <div class="element-item 2015-2017 2018-Present col-md-4" data-category="">
                        <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/clients/caz.png') }}"/>
                        </div>
                        <p class="company-name">CAZ (THAILAND) PUBLIC COMPANY LIMITED</p>
                        <p>Initial Public Offering (IPO)</p>
                        <p><span>Value</span>312000000</p>
                        <p class="company-name">บริษัท ซี เอ แซด (ประเทศไทย) จำกัด (มหาชน)</p>
                        </div>
                        <div class="element-item 2006-2008 col-md-4" data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/clients/itc.png') }}"/>
                        </div>
                        <p class="company-name"> Information Technology Group Co., Ltd.</p>
                        <p>Valuation</p>
                        <p><span>Value</span>----</p>
                        <p class="company-name">บริษัท อินฟอร์เมชั่น เทคโนโลยี กรุ๊ป จำกัด</p>
                        </div>
                        <div class="element-item 2015-2017 2018-Present col-md-4" data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/clients/world_united_logistic.png') }}"/>
                        </div>
                        <p class="company-name">World United Logistics Thailand Co.,Ltd.</p>
                        <p>Valuation</p>
                        <p><span>Value</span>----</p>
                        <p class="company-name">บริษัท เวิลด์ ยูไนเต็ด โลจิสติกส์ (ประเทศไทย) จำกัด</p>
                        </div>
                        <div class="element-item 2015-2017 2018-Present" data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/clients/foodcapitals.png') }}"/>
                        </div>
                        <p class="company-name">Food Capitals Public Company Limited</p>
                        <p>Independent Financial Adviosr</p>
                        <p><span>Value</span>----</p>
                        <p class="company-name">บริษัท ฟู้ด แคปปิตอล จำกัด (มหาชน)</p>
                        </div>
                        <div class="element-item 2015-2017 2018-Present " data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/clients/hydrotek.jpg') }}"/>
                        </div>
                        <p class="company-name">HYDROTEK PUBLIC COMPANY LIMITED</p>
                        <p>Financial Advisor for Disposal of subsidiary</p>
                        <p><span>Value</span>460000000</p>
                        <p class="company-name">บริษัท ไฮโดรเท็ค จำกัด (มหาชน)</p>
                        </div>
                        <div class="element-item 2012-2014 2018-Present " data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/clients/prime.png') }}"/>
                        </div>
                        <p class="company-name">PRIME ROAD POWER PUBLIC COMPANY LIMITED</p>
                        <p>Independent Financial Adviosr</p>
                        <p><span>Value</span></p>
                        <p class="company-name">บริษัท ไพร์ม โรด เพาเวอร์ จำกัด (มหาชน)</p>
                        </div>
                        <div class="element-item 2012-2014 2018-Present" data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/clients/') }}"/>
                        </div>
                        <p class="company-name">VILLA KUNALAI PUBLIC COMPANY LIMITED</p>
                        <p>Initial Public Offering (IPO)</p>
                        <p><span>Value</span>165000000</p>
                        <p class="company-name">บริษัท วิลล่า คุณาลัย จำกัด (มหาชน)</p>
                        </div>
                        <div class="element-item 2015-2017 2018-Present " data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/clients/bafs.jpg') }}"/>
                        </div>
                        <p class="company-name">----</p>
                        <p>Valuation of its target company  </p>
                        <p><span>Value</span>----</p>
                        <p class="company-name">----</p>
                        </div>
                        <div class="element-item 2012-2014 2018-Present " data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/clients/eason.jpg') }}"/>
                        </div>
                        <p class="company-name">----</p>
                        <p>Valuation of its target company  </p>
                        <p><span>Value</span>----</p>
                        <p class="company-name">----</p>
                        </div>

                    </div>
                </div>
            </div> -->
            <div class="grid col-md-10">
                <div class="container">
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                       <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/clients/caz.png') }}"/>
                       </div>
                       <p class="company-name">CAZ (THAILAND) PUBLIC COMPANY LIMITED</p>
                       <p>Initial Public Offering (IPO)</p>
                       <p><span>Value</span>312000000</p>
                       <p class="company-name">บริษัท ซี เอ แซด (ประเทศไทย) จำกัด (มหาชน)</p>
                    </div>
                    <div class="element-item 2006-2008 " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/clients/itc.png') }}"/>
                       </div>
                       <p class="company-name"> Information Technology Group Co., Ltd.</p>
                       <p>Valuation</p>
                       <p><span>Value</span>----</p>
                       <p class="company-name">บริษัท อินฟอร์เมชั่น เทคโนโลยี กรุ๊ป จำกัด</p>
                    </div>
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/clients/world_united_logistic.png') }}"/>
                       </div>
                       <p class="company-name">World United Logistics Thailand Co.,Ltd.</p>
                       <p>Valuation</p>
                       <p><span>Value</span>----</p>
                       <p class="company-name">บริษัท เวิลด์ ยูไนเต็ด โลจิสติกส์ (ประเทศไทย) จำกัด</p>
                    </div>
                    <div class="element-item 2015-2017 2018-Present" data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/clients/foodcapitals.png') }}"/>
                       </div>
                       <p class="company-name">Food Capitals Public Company Limited</p>
                       <p>Independent Financial Adviosr</p>
                       <p><span>Value</span>----</p>
                       <p class="company-name">บริษัท ฟู้ด แคปปิตอล จำกัด (มหาชน)</p>
                    </div>
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/clients/hydrotek.jpg') }}"/>
                       </div>
                       <p class="company-name">HYDROTEK PUBLIC COMPANY LIMITED</p>
                       <p>Financial Advisor for Disposal of subsidiary</p>
                       <p><span>Value</span>460000000</p>
                       <p class="company-name">บริษัท ไฮโดรเท็ค จำกัด (มหาชน)</p>
                    </div>
                    <div class="element-item 2012-2014 2018-Present " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/clients/prime.png') }}"/>
                       </div>
                       <p class="company-name">PRIME ROAD POWER PUBLIC COMPANY LIMITED</p>
                       <p>Independent Financial Adviosr</p>
                       <p><span>Value</span></p>
                       <p class="company-name">บริษัท ไพร์ม โรด เพาเวอร์ จำกัด (มหาชน)</p>
                    </div>
                    <div class="element-item 2012-2014 2018-Present" data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/clients/') }}"/>
                       </div>
                       <p class="company-name">VILLA KUNALAI PUBLIC COMPANY LIMITED</p>
                       <p>Initial Public Offering (IPO)</p>
                       <p><span>Value</span>165000000</p>
                       <p class="company-name">บริษัท วิลล่า คุณาลัย จำกัด (มหาชน)</p>
                    </div>
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/clients/bafs.jpg') }}"/>
                       </div>
                       <p class="company-name">----</p>
                       <p>Valuation of its target company  </p>
                       <p><span>Value</span>----</p>
                       <p class="company-name">----</p>
                    </div>
                    <div class="element-item 2012-2014 2018-Present " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/clients/eason.jpg') }}"/>
                       </div>
                       <p class="company-name">----</p>
                       <p>Valuation of its target company  </p>
                       <p><span>Value</span>----</p>
                       <p class="company-name">----</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/jquery.filterizr.min.js"></script> -->
    <script>
        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });

        // filter functions
        var filterFns = {};

        // bind filter button click
        $('.filters-button-group').on( 'click', 'button', function() {
        var filterValue = $( this ).attr('data-filter');

        // use filterFn if matches value
        filterValue = filterFns[ filterValue ] || filterValue;
        $grid.isotope({ filter: filterValue });
        });

        // // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
                // $('.filter-container').filterizr();
            });
        });
         // change is-checked class on buttons
        //  $('.button-group').each( function( i, buttonGroup ) {
        //     var $buttonGroup = $( buttonGroup );
            // $('li').on( 'click', function() {
            //     // $buttonGroup.find('.is-checked').removeClass('is-checked');
            //     // $( this ).addClass('is-checked');
            //     $('.filter-container').filterizr();
            // });
        // });

    </script>
@endsection