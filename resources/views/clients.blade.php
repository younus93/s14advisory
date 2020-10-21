
<div class="client-section py-5" id="client-sec">
    <div class="container for-large-window">
        <h2 class="heading text-center">Our Clients</h2>

        <div id='our-clients'>
            <div class="owl-carousel owl-theme owl-reponsive breakpoint">
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/caz.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/kunalai.jpg') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/bafs.jpg') }}"/>
                    </div>
                </a>
                <!-- <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/eason.jpg') }}"/>
                    </div>
                </a> -->
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/tu-property.jpg') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/assetwise.jpeg') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/accelence.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/itc.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/itm.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/world_united_logistic.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">    
                    <div class="item">
                        <img src="{{ asset('img/clients/aq.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/eic.png') }}"/>
                    </div>
                </a> 
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/nathlan.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/ccg.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/click.png') }}"/>
                    </div>
                </a>                
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/print-master.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/digi.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/hydrotek.jpg') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/blissel.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/siam.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/general-beverage.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/pylon.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/foodcapitals.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/prime.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/country.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/cpl.png') }}"/>
                    </div>
                </a>
                <a href="/track-records">
                    <div class="item">
                        <img src="{{ asset('img/clients/takuni.png') }}"/>
                    </div>
                </a>
            </div>
        </div>
    </div>   
</div>

@section('scripts')
    @parent
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:2,
                        nav:true,
                    },
                    480 : {
                        items:3,
                        nav:true,
                    },
                    600:{
                        items:4,
                        nav:true,
                    },
                    768 : {
                        items:6,
                        nav:true,
                    },
                    1000:{
                        items:6,
                        nav:true
                    },
                    1400:{
                        items:6,
                        nav:true
                    }
                }
            });
        });
    </script>
@append