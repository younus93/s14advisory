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

    <section class="our-deals my-5">
        <h2 class="heading text-center">Our Deals</h2>


        <div class="container">
            <ul class="filter-btn-grps">
                <!-- For filtering controls add -->
                <li class='filter-btn' data-filter="all"> All</li>
                <li class='filter-btn' data-filter="1">IPO</li>
                <li class='filter-btn' data-filter="2">Financial Advisor</li>
                <li class='filter-btn' data-filter="3">Independent Financial Advisor</li>
                <li class='filter-btn' data-filter="4">Valuation</li>
                <!-- For a shuffle control add -->
                <li class='filter-btn' data-shuffle> Shuffle items </li>
                <!-- For sorting controls add -->
                <!-- <li data-sortAsc> Ascending </li>
                <li data-sortDesc> Descending </li> -->
            </ul>

            <div class="row">
                <div class="filter-container">
                    <a href="/img/track-records/caz.png" data-fancybox="images" data-caption="My caption">
                        <div class="filtr-item "  data-category="1" data-sort="value">
                            <img src="/img/track-records/caz.png" alt="sample" />
                        </div>
                    </a>
                    <a href="/img/track-records/caz.png" data-fancybox="images" data-caption="My caption">
                        <div class="filtr-item" data-category="2, 1" data-sort="value">
                            <img src="/img/track-records/caz.png" alt="sample" />
                        </div>
                    </a>
                    <a href="/img/track-records/caz.png" data-fancybox="images" data-caption="My caption">
                        <div class="filtr-item" data-category="1, 3,4" data-sort="value">
                            <img src="/img/track-records/caz.png" alt="sample" />
                        </div>
                    </a>
                    <a href="/img/track-records/caz.png" data-fancybox="images" data-caption="My caption">
                        <div class="filtr-item" data-category="1,4" data-sort="value">
                            <img src="/img/track-records/caz.png" alt="sample" />
                        </div>
                    </a>    
                    <a href="/img/track-records/caz.png" data-fancybox="images" data-caption="My caption">
                        <div class="filtr-item" data-category="1, 4" data-sort="value">
                            <img src="/img/track-records/caz.png" alt="sample" />
                        </div>
                    </a>
                    <a href="/img/track-records/caz.png" data-fancybox="images" data-caption="My caption">
                        <div class="filtr-item" data-category="1,2" data-sort="value">
                            <img src="/img/track-records/caz.png" alt="sample" />
                        </div>
                    </a>
                    <a href="/img/track-records/caz.png" data-fancybox="images" data-caption="My caption">
                        <div class="filtr-item" data-category="1, 2,3" data-sort="value">
                            <img src="/img/track-records/caz.png" alt="sample" />
                        </div>
                    </a>
                    <a href="/img/track-records/caz.png" data-fancybox="images" data-caption="My caption">
                        <div class="filtr-item" data-category="1" data-sort="value">
                            <img src="/img/track-records/caz.png" alt="sample" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="deals-filter m-0"> -->
            <!-- <div class="button-group filters-button-group text-center my-3 col-md-2">
                <button class="button is-checked" data-filter="*">show all</button>
                <button class="button" data-filter=".2018-Present">2018 - Present</button>
                <button class="button" data-filter=".2015-2017">2015 - 2017</button>
                <button class="button" data-filter=".2012-2014">2012 - 2014</button>
                <button class="button" data-filter=".2009-2011">2009 - 2011</button>
                <button class="button" data-filter=".2006-2008">2006 - 2008</button>
            </div> -->
            <!-- <div class="row">
                <div class="container">
                    <div class="grid row">
                  
                        <div class="element-item 2015-2017 2018-Present col-md-4" data-category="">
                        <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/caz.png') }}"/>
                        </div>
                        <p class="company-name">CAZ (THAILAND) PUBbuttonC COMPANY buttonMITED</p>
                        <p>Initial Pubbuttonc Offering (IPO)</p>
                        <p><span>Value</span>312000000</p>
                        <p class="company-name">บริษัท ซี เอ แซด (ประเทศไทย) จำกัด (มหาชน)</p>
                        </div>
                        <div class="element-item 2006-2008 col-md-4" data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/itc.png') }}"/>
                        </div>
                        <p class="company-name"> Information Technology Group Co., Ltd.</p>
                        <p>Valuation</p>
                        <p><span>Value</span>----</p>
                        <p class="company-name">บริษัท อินฟอร์เมชั่น เทคโนโลยี กรุ๊ป จำกัด</p>
                        </div>
                        <div class="element-item 2015-2017 2018-Present col-md-4" data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/world_united_logistic.png') }}"/>
                        </div>
                        <p class="company-name">World United Logistics Thailand Co.,Ltd.</p>
                        <p>Valuation</p>
                        <p><span>Value</span>----</p>
                        <p class="company-name">บริษัท เวิลด์ ยูไนเต็ด โลจิสติกส์ (ประเทศไทย) จำกัด</p>
                        </div>
                        <div class="element-item 2015-2017 2018-Present" data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/foodcapitals.png') }}"/>
                        </div>
                        <p class="company-name">Food Capitals Pubbuttonc Company buttonmited</p>
                        <p>Independent Financial Adviosr</p>
                        <p><span>Value</span>----</p>
                        <p class="company-name">บริษัท ฟู้ด แคปปิตอล จำกัด (มหาชน)</p>
                        </div>
                        <div class="element-item 2015-2017 2018-Present " data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/hydrotek.jpg') }}"/>
                        </div>
                        <p class="company-name">HYDROTEK PUBbuttonC COMPANY buttonMITED</p>
                        <p>Financial Advisor for Disposal of subsidiary</p>
                        <p><span>Value</span>460000000</p>
                        <p class="company-name">บริษัท ไฮโดรเท็ค จำกัด (มหาชน)</p>
                        </div>
                        <div class="element-item 2012-2014 2018-Present " data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/prime.png') }}"/>
                        </div>
                        <p class="company-name">PRIME ROAD POWER PUBbuttonC COMPANY buttonMITED</p>
                        <p>Independent Financial Adviosr</p>
                        <p><span>Value</span></p>
                        <p class="company-name">บริษัท ไพร์ม โรด เพาเวอร์ จำกัด (มหาชน)</p>
                        </div>
                        <div class="element-item 2012-2014 2018-Present" data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/') }}"/>
                        </div>
                        <p class="company-name">VILLA KUNALAI PUBbuttonC COMPANY buttonMITED</p>
                        <p>Initial Pubbuttonc Offering (IPO)</p>
                        <p><span>Value</span>165000000</p>
                        <p class="company-name">บริษัท วิลล่า คุณาลัย จำกัด (มหาชน)</p>
                        </div>
                        <div class="element-item 2015-2017 2018-Present " data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/bafs.jpg') }}"/>
                        </div>
                        <p class="company-name">----</p>
                        <p>Valuation of its target company  </p>
                        <p><span>Value</span>----</p>
                        <p class="company-name">----</p>
                        </div>
                        <div class="element-item 2012-2014 2018-Present " data-category="">
                            <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/eason.jpg') }}"/>
                        </div>
                        <p class="company-name">----</p>
                        <p>Valuation of its target company  </p>
                        <p><span>Value</span>----</p>
                        <p class="company-name">----</p>
                        </div>

                    </div>
                </div>
            </div> -->
            <!-- <div class="grid col-md-10">
                <div class="container">
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                       <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/cbuttonents/caz.png') }}"/>
                       </div>
                       <p class="company-name">CAZ (THAILAND) PUBbuttonC COMPANY buttonMITED</p>
                       <p>Initial Pubbuttonc Offering (IPO)</p>
                       <p><span>Value</span>312000000</p>
                       <p class="company-name">บริษัท ซี เอ แซด (ประเทศไทย) จำกัด (มหาชน)</p>
                    </div>
                    <div class="element-item 2006-2008 " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/cbuttonents/itc.png') }}"/>
                       </div>
                       <p class="company-name"> Information Technology Group Co., Ltd.</p>
                       <p>Valuation</p>
                       <p><span>Value</span>----</p>
                       <p class="company-name">บริษัท อินฟอร์เมชั่น เทคโนโลยี กรุ๊ป จำกัด</p>
                    </div>
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/cbuttonents/world_united_logistic.png') }}"/>
                       </div>
                       <p class="company-name">World United Logistics Thailand Co.,Ltd.</p>
                       <p>Valuation</p>
                       <p><span>Value</span>----</p>
                       <p class="company-name">บริษัท เวิลด์ ยูไนเต็ด โลจิสติกส์ (ประเทศไทย) จำกัด</p>
                    </div>
                    <div class="element-item 2015-2017 2018-Present" data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/cbuttonents/foodcapitals.png') }}"/>
                       </div>
                       <p class="company-name">Food Capitals Pubbuttonc Company buttonmited</p>
                       <p>Independent Financial Adviosr</p>
                       <p><span>Value</span>----</p>
                       <p class="company-name">บริษัท ฟู้ด แคปปิตอล จำกัด (มหาชน)</p>
                    </div>
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/cbuttonents/hydrotek.jpg') }}"/>
                       </div>
                       <p class="company-name">HYDROTEK PUBbuttonC COMPANY buttonMITED</p>
                       <p>Financial Advisor for Disposal of subsidiary</p>
                       <p><span>Value</span>460000000</p>
                       <p class="company-name">บริษัท ไฮโดรเท็ค จำกัด (มหาชน)</p>
                    </div>
                    <div class="element-item 2012-2014 2018-Present " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/cbuttonents/prime.png') }}"/>
                       </div>
                       <p class="company-name">PRIME ROAD POWER PUBbuttonC COMPANY buttonMITED</p>
                       <p>Independent Financial Adviosr</p>
                       <p><span>Value</span></p>
                       <p class="company-name">บริษัท ไพร์ม โรด เพาเวอร์ จำกัด (มหาชน)</p>
                    </div>
                    <div class="element-item 2012-2014 2018-Present" data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/cbuttonents/') }}"/>
                       </div>
                       <p class="company-name">VILLA KUNALAI PUBbuttonC COMPANY buttonMITED</p>
                       <p>Initial Pubbuttonc Offering (IPO)</p>
                       <p><span>Value</span>165000000</p>
                       <p class="company-name">บริษัท วิลล่า คุณาลัย จำกัด (มหาชน)</p>
                    </div>
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/cbuttonents/bafs.jpg') }}"/>
                       </div>
                       <p class="company-name">----</p>
                       <p>Valuation of its target company  </p>
                       <p><span>Value</span>----</p>
                       <p class="company-name">----</p>
                    </div>
                    <div class="element-item 2012-2014 2018-Present " data-category="">
                        <div class="logo-prebox">
                           <img class='w-100' src="{{ asset('img/cbuttonents/eason.jpg') }}"/>
                       </div>
                       <p class="company-name">----</p>
                       <p>Valuation of its target company  </p>
                       <p><span>Value</span>----</p>
                       <p class="company-name">----</p>
                    </div>
                </div>
            </div> -->
            
        <!-- </div> -->
            <!-- <div class="filters-button-group"> -->
                <!-- For filtering controls add -->
                <!-- <button data-filter="all" class="button"> All</button>
                <button data-filter="ipo" class="button">IPO</button>
                <button data-filter="fa" class="button"> Financial Advisor </button>
                <button data-filter="ifa" class="button"> Independent Financial Advisor</button>
                <button data-filter="v" class="button">Valuation</button> -->
                <!-- For a shuffle control add -->
                <!-- <button data-shuffle class="button"> Shuffle items </button> -->
                <!-- For sorting controls add -->
                <!-- <button data-sortAsc> Ascending </button> -->
                <!-- <button data-sortDesc> Descending </button> -->
            <!-- </div> -->
            <!-- To choose the value by which you want to sort add -->
            <!-- <select data-sortOrder>
                <option value="index"> Position </option>
                <option value="sortData"> Custom Data </option>
            </select> -->
            <!-- To create a search control -->
            <!-- <input type="text" name="filtr-search" value="" placeholder="Your search" data-search=""> -->
            <!-- <div class="filter-container grid">
                <div class="filtr-item" data-category="ipo" data-sort="value">
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/caz.png') }}"/>
                        </div>
                        <p class="company-name">CAZ (THAILAND) PUBbuttonC COMPANY buttonMITED</p>
                        <p>Initial Pubbuttonc Offering (IPO)</p>
                        <p><span>Value</span>312000000</p>
                        <p class="company-name">บริษัท ซี เอ แซด (ประเทศไทย) จำกัด (มหาชน)</p>
                    </div>
                </div>
                <div class="filtr-item" data-category="ipo,fa" data-sort="value">
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/caz.png') }}"/>
                        </div>
                        <p class="company-name">CAZ (THAILAND) PUBbuttonC COMPANY buttonMITED</p>
                        <p>Initial Pubbuttonc Offering (IPO)</p>
                        <p><span>Value</span>312000000</p>
                        <p class="company-name">บริษัท ซี เอ แซด (ประเทศไทย) จำกัด (มหาชน)</p>
                    </div>
                </div>
                <div class="filtr-item" data-category="ipo,ifa" data-sort="value">
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/caz.png') }}"/>
                        </div>
                        <p class="company-name">CAZ (THAILAND) PUBbuttonC COMPANY buttonMITED</p>
                        <p>Initial Pubbuttonc Offering (IPO)</p>
                        <p><span>Value</span>312000000</p>
                        <p class="company-name">บริษัท ซี เอ แซด (ประเทศไทย) จำกัด (มหาชน)</p>
                    </div>
                </div>
                <div class="filtr-item" data-category="v" data-sort="value">
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/caz.png') }}"/>
                        </div>
                        <p class="company-name">CAZ (THAILAND) PUBbuttonC COMPANY buttonMITED</p>
                        <p>Initial Pubbuttonc Offering (IPO)</p>
                        <p><span>Value</span>312000000</p>
                        <p class="company-name">บริษัท ซี เอ แซด (ประเทศไทย) จำกัด (มหาชน)</p>
                    </div>
                </div>
                <div class="filtr-item" data-category="v,ifa" data-sort="value">
                    <div class="element-item 2015-2017 2018-Present " data-category="">
                        <div class="logo-prebox">
                            <img class='w-100' src="{{ asset('img/cbuttonents/caz.png') }}"/>
                        </div>
                        <p class="company-name">CAZ (THAILAND) PUBbuttonC COMPANY buttonMITED</p>
                        <p>Initial Pubbuttonc Offering (IPO)</p>
                        <p><span>Value</span>312000000</p>
                        <p class="company-name">บริษัท ซี เอ แซด (ประเทศไทย) จำกัด (มหาชน)</p>
                    </div>
                </div>
            </div> -->

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
    </script>
@endsection