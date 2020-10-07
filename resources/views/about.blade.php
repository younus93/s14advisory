@section('head')
    @parent
    <style>
        .primary-list li{
            font-weight: 500;
        }
    </style>
@append

<div class="section-block" id="about">
    <div class="container">
        <div class="section-heading center-holder mb-0">
            <h3 class="bold">Our guarantee is to take your business <span
                        class="italic libre-baskerville primary-color">From Good to Great.</span></h3>
            <div class="section-heading-line"></div>
        </div>
        <div class="row mt-40">
            <div class="hidden-md-down col-md-6 col-sm-12 col-12">
                <div class="pr-45-md text-center">
                <img src="img/content/finance/about-us.jpeg"
                class="rounded-border shadow-primary full-width" alt="img"
                style="width: 70%;"></div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="feature-block-3 left-holder"><i class="icon-shield-1"></i>
                            <h4>{{ __('messages.financial_advisory') }}</h4>
                            <p>{{ __('messages.financial_advisory_text') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="feature-block-3 left-holder"><i class="icon-networking-12"></i>
                            <h4>{{ __('messages.client_network') }}</h4>
                            <p>{{ __('messages.client_network_text') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="feature-block-3 left-holder"><i class="icon-briefcase"></i>
                            <h4>{{ __('messages.flexibility') }}</h4>
                            <p>{{ __('messages.flexibility_text') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="feature-block-3 left-holder"><i class="icon-target2"></i>
                            <h4>{{ __('messages.professionalism') }}</h4>
                            <p>{{ __('messages.professionalism_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="section-heading left-holder mt-20">
                    <h3 class="bold">Our History</h3>
                    <div class="section-heading-line"></div>
                </div>
                <div class="text-content">
                    <p style="color: #222222;">{{ __('messages.about-1') }}</p>
                    <p style="color: #222222;">{{ __('messages.about-2') }}</p>
                </div>
                {{--<div class="mt-15"><a href="#" class="primary-button button-sm">Learn More</a></div>--}}
            </div>
            <div class="col-md-5 col-sm-6 col-12 offset-md-1">
                <div class="section-heading left-holder mt-20">
                    <h3 class="bold">Our Mission</h3>
                    <div class="section-heading-line"></div>
                </div>
                <ul class="primary-list">
                    <li><i class="fa fa-check-square"></i>{{ __('messages.mission-1') }}</li>
                    <li><i class="fa fa-check-square"></i>{{ __('messages.mission-2') }}</li>
                    <li><i class="fa fa-check-square"></i>{{ __('messages.mission-3') }}</li>
                    <li><i class="fa fa-check-square"></i>{{ __('messages.mission-4') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="section-block-parallax jarallax black-overlay-20" data-jarallax data-speed="0.6"
     style="background-image: url('img/content/bgs/bg3.png');">
    <div class="container">
        <div class="large-heading center-holder">
            <h2 class="white-color">{{ __('messages.vision') }}</h2>
            <div class="section-heading-line"></div>
        </div>
        {{--<div class="mt-25 center-holder"><a href="#" class="white-button button-md">Become a Client</a></div>--}}
    </div>
</div>
