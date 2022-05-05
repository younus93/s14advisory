@section('scripts')
    @parent
    <style>
        .medium-icon-tabs-light .tabs .tab-menu li {
            height: 135px;
            width: 135px;
        }

        .medium-icon-tabs-light .tabs .tab-menu li a i {
            color: #ffffff;
        }
        .medium-icon-tabs-light .tabs .tab-menu li a{
            color: #ffffff;
        }
    </style>
@append

<div id="services" class="section-block black-overlay-60"
     style="background-image: url('/img/homebg2.jpg');background-size: cover; z-index: 0;">
    <div class="container">
        <div class="large-heading center-holder">
            <h5 class="white-color">Innovative Solutions to
                <span class="italic libre-baskerville">Move Your business forward</span>.</h5>
            <div class="section-heading-line"></div>
        </div>
        <div class="row">
            <div class="col-md-10 col-sm-12 col-12 offset-md-1">
                <div class="medium-icon-tabs-light">
                    <div class="tabs tabs_animate mt-10">
                        <ul class="tab-menu center-holder">
                            <li class="active-tab">
                                <a href="#tab-f-1">
                                    <!-- <i class="icon-banking"></i> -->
                                    <img class='no' src="/img/icons/fund-raising-not.png"/>
                                    <img class='yes' src="/img/icons/fund-raising.png"/>
                                    @lang('messages.fundRaising')
                                </a>
                            </li>
                            <li class="">
                                <a href="#tab-f-2">
                                    <!-- <i class="icon-money-bag-1"></i> -->
                                    <img class='no' src="/img/icons/merger-acquistion-not.png"/>
                                    <img class='yes' src="/img/icons/merger-acquistion.png"/>
                                    @lang('messages.ma')
                                </a>
                            </li>
                            <li class="">
                                <a href="#tab-f-3">
                                    <!-- <i class="icon-analytics-3"></i> -->
                                    <img class='no' src="/img/icons/share-valuation-not.png"/>
                                    <img class='yes' src="/img/icons/share-valuation.png"/>
                                    @lang('messages.shareValuation')
                                </a>
                            </li>
                            <li class="">
                                <a href="#tab-f-4">
                                    <!-- <i class="icon-balance"></i> -->
                                    <img class='no' src="/img/icons/ifa-service-not.png"/>
                                    <img class='yes' src="/img/icons/ifa-service.png"/>
                                    @lang('messages.ifa')
                                </a>
                            </li>
                            <li class="">
                                <a href="#tab-f-5">
                                    <img class='no' src="/img/icons/ipo-advisory-not.png"/>
                                    <img class='yes' src="/img/icons/ipo-advisory.png"/>
                                    <!-- <i class="icon-cheque-1"></i> -->
                                    @lang('messages.ipo')
                                </a>
                            </li>
                            <li class="">
                                <a href="#tab-f-6">
                                    <img class='no' src="/img/icons/business-restructring-not.png"/>
                                    <img class='yes' src="/img/icons/business-restructring.png"/>
                                    <!-- <i class="icon-watch-1"></i> -->
                                    @lang('messages.br')
                                </a>
                            </li>
                            <li class="">
                                <a href="#tab-f-7">
                                    <img class='no' src="/img/icons/feasibility-study-not.png"/>
                                    <img class='yes' src="/img/icons/feasibility-study.png"/>
                                    <!-- <i class="icon-school-material"></i> -->
                                    @lang('messages.fs')
                                </a>
                            </li>
                        </ul>
                        <div id="tab-f-1" class="clearfix tab-body-dark" style="display: none;">
                            {{--<h4>The power to generate, convince, convert &amp; grow.</h4>--}}
                            <p>@lang('messages.fundRaising_text')</p>
                        </div>
                        <div id="tab-f-2" class="clearfix tab-body-dark" style="display: none;">
                            {{--<h4>Brand builders. Brand managers.</h4>--}}
                            <p>@lang('messages.ma_text')</p>
                        </div>
                        <div id="tab-f-3" class="clearfix tab-body-dark" style="display: none;">
                            {{--<h4>Where great brands begin!</h4>--}}
                            <p>@lang('messages.shareValuation_text') </p>
                        </div>
                        <div id="tab-f-4" class="clearfix tab-body-dark" style="display: none;">
                            {{--<h4>Creating a world of brilliant identities.</h4>--}}
                            <p>@lang('messages.ifa_text')</p>
                        </div>
                        <div id="tab-f-5" class="clearfix tab-body-dark" style="display: block;">
                            {{--<h4>Forging brands, driving revenue.</h4>--}}
                            <p>@lang('messages.ipo_text')</p>
                        </div>
                        <div id="tab-f-6" class="clearfix tab-body-dark" style="display: block;">
                            {{--<h4>Finding new opportunities to grow</h4>--}}
                            <p>@lang('messages.br_text')</p>
                        </div>
                        <div id="tab-f-7" class="clearfix tab-body-dark" style="display: block;">
                            {{--<h4>Plan, Predict and Achieve milestones</h4>--}}
                            <p>@lang('messages.fs_text')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>