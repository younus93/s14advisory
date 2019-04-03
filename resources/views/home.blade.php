@extends('layouts.app')
@section('head')
    <style>
        .profile{
            max-height: 450px;
            max-width: 360px;
            left: -180px;
            position:relative;
            transition: ease-in 0.6s;
        }
        .team-classic:hover .profile{
            transform: translateX(180px);
        }
    </style>
@endsection
@section('content')


    <div class="main-video-section" id="home">
        <div class="video-area" id="video-area">
            <div class="player" id="main-video-play"
                 data-property="{videoURL:'https://youtu.be/GcSOzmz_LJE',
             containment:'#video-area',
             showControls:false,
             optimizeDisplay : true,
             autoPlay:true, zoom:10, loop:true, mute:true, startAt:0, opacity:1, quality:'low',}
        "></div>
            <div>
                <div class="main-video-content">
                    <div class="container">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-block" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="pr-45-md"><img src="img/content/finance/home1.jpg"
                                               class="rounded-border shadow-primary full-width" alt="img"></div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="section-heading left-holder mb-0">
                        <h3 class="bold">Our guarantee is to take your business <span
                                    class="italic libre-baskerville primary-color">From Good to Great.</span></h3>
                        <div class="section-heading-line"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="feature-block-3 left-holder"><i class="icon-shield-1"></i>
                                <h4>Financial Advisory Experts</h4>
                                <p>S14 has a plentiful Experience in advising financial services such as merger and
                                    acquisition, fundraising and financial restructuring.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="feature-block-3 left-holder"><i class="icon-networking-12"></i>
                                <h4>Extensive client network</h4>
                                <p>A vast client network of local investors and including regional investors. S14 will
                                    commit to search thoroughly a project investor from the existing pool investors.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="feature-block-3 left-holder"><i class="icon-briefcase"></i>
                                <h4>Flexibility</h4>
                                <p>Alliance with financial institutions, legal advisors, external and internal auditors. We
                                    take no short-cuts yet are highly effective in articulating with our clients</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="feature-block-3 left-holder"><i class="icon-target2"></i>
                                <h4>Professionalism</h4>
                                <p>S14 commits to input manpower exhaustively in every project in order to provide the best
                                    alternative advice to maximize clients benefits.</p>
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
                        <p>S14 Advisory Company Limited was founded on 29 Aug 2014 by Ms. Piyapa
                            Chongsathien who graduated from Assumption University with Bachelor and master
                            degree in Business and Administration majoring in Finance and has over 15 years of
                            work experiences in the same field.
                            S14 advisory company limited is an SEC certified in March 2016 and proudly serves
                            the nations leading companies, small to medium-sized businesses, and other
                            institutions.</p>
                        <p>
                            S14 advisory company limited is an SEC certified in March 2016 and proudly serves
                            the nations leading companies, small to medium-sized businesses, and other
                            institutions.
                        </p>
                    </div>
                    {{--<div class="mt-15"><a href="#" class="primary-button button-sm">Learn More</a></div>--}}
                </div>
                <div class="col-md-5 col-sm-6 col-12 offset-md-1 mt-10">
                    <div class="section-heading left-holder mt-20">
                        <h3 class="bold">Our Mission</h3>
                        <div class="section-heading-line"></div>
                    </div>
                    <ul class="primary-list">
                        <li><i class="fa fa-check-square"></i>We are built on an uncompromising foundation that financial
                            advice should be transparent and honest
                        </li>
                        <li><i class="fa fa-check-square"></i>We deliver services that solve complex problems in a
                            beautifully uncomplicated way
                        </li>
                        <li><i class="fa fa-check-square"></i>We strive for the highest level of client service and are
                            focused on creating long term partnership with our clients.
                        </li>
                        <li><i class="fa fa-check-square"></i>We work to make a positive impact on our nation&#39;s economy.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section-block-parallax jarallax black-overlay-20" data-jarallax data-speed="0.6" style="background-image: url('img/content/bgs/bg3.png');">
        <div class="container">
            <div class="large-heading center-holder">
                <h2 class="white-color">Out to become the most client preferred financial advisory partner across the country.</h2>
                <div class="section-heading-line"></div>
            </div>
            {{--<div class="mt-25 center-holder"><a href="#" class="white-button button-md">Become a Client</a></div>--}}
        </div>
    </div>

    <div class="section-block" id="services">
        <div class="container">
            <div class="section-heading center-holder">
                <h2 class="bold">Innovative solutions to <span class="italic libre-baskerville primary-color">move your business forward</span>
                </h2>
            </div>
            <div class="row mt-40">
                <div class="col-md-3 col-sm-3 col-12">
                    <div class="feature-block-2 feature-bordered feature-shadow feature-bg inner-40 left-holder">
                        <i class="icon-banking"></i>
                        <h4>Fund Raising</h4>
                        <p>Equity placement or recapitalization through our extensive network for a private placement or Pre
                            initial public offering</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-12">
                    <div class="feature-block-2 feature-bordered feature-shadow feature-bg inner-40 left-holder">
                        <i class="icon-businessman"></i>
                        <h4>Mergers & Acquistions</h4>
                        <p>Lead deals through our client network, recommend fair ranges of valuations.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-12">
                    <div class="feature-block-2 feature-bordered feature-shadow feature-bg inner-40 left-holder"><i
                                class="icon-airplane"></i>
                        <h4>Company (or) Share Valuation</h4>
                        <p>Provide services at all stages of preparing a valuation of share/company.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-12">
                    <div class="feature-block-2 feature-bordered feature-shadow feature-bg inner-40 left-holder"><i
                                class="icon-binoculars"></i>
                        <h4>IFA Service</h4>
                        <p>Provide analysis on financial perspective allowing our clients to make fully informed business
                            decisions.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-block-2 feature-bordered feature-shadow feature-bg inner-40 left-holder"><i
                                class="icon-bank"></i>
                        <h4>IPO advisory</h4>
                        <p>Provides services at all stages of preparing for an IPO and transforming a company from private
                            into a public entity.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-block-2 feature-bordered feature-shadow feature-bg inner-40 left-holder"><i
                                class="icon-contract"></i>
                        <h4>Restructuring</h4>
                        <p>Provide services in restructuring, Advise information of a viable finance restructuring plan
                            and assist negotiations with lenders.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="feature-block-2 feature-bordered feature-shadow feature-bg inner-40 left-holder"><i
                                class="icon-school-material"></i>
                        <h4>Feasibility study/Business Plan</h4>
                        <p>Determine the viability of an idea, such an ensuring that a project is legally and technically
                            feasible as well as economically</p>
                    </div>
                </div>
            </div>
            {{--<div class="center-holder mt-20"><a href="#" class="primary-button-bordered button-md">View All Services</a></div>--}}
        </div>
    </div>

    <div class="section-block-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="video-video-box full-width"><img src="img/content/finance/home2.jpg"
                                                                 class="rounded-border shadow-primary mb-10" alt="img">
                        <div class="video-video-box-overlay">
                            <div class="video-video-box-button-sm">
                                <button class="video-video-play-icon" data-izimodal-open=".izimodal"><i
                                            class="fa fa-play"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="izimodal" data-iziModal-width="800px" data-iziModal-fullscreen="true">
                        <iframe height="415" src="https://www.youtube.com/embed/nrJtHemSPW4"
                                class="full-width shadow-primary"></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="pl-45-md">
                        <div class="section-heading left-holder mt-30">
                            <h3 class="bold">Strategic minds for your company's growth.</h3>
                            <div class="section-heading-line"></div>
                        </div>
                        <div class="text-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                        <div class="mt-15"><a href="#" class="primary-button button-sm">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-block" id="team">
        <div class="container">
            <div class="section-heading center-holder">
                <h2 class="bold">Our team. <span class="italic libre-baskerville primary-color">Your advantage</span></h2>
                <div class="section-heading-line"></div>
                <p>We work on a strategic review process with a predefined agenda which ensures that the financial advise
                    matters are addressed at the right time with In-Depth discussions.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="team-classic" style="overflow: hidden;
                            background: url('/img/background.jpg');
                            background-size: cover;
                            /*-webkit-filter: blur(5px);*/
                            /*-moz-filter: blur(5px);*/
                            /*-o-filter: blur(5px);*/
                            /*-ms-filter: blur(5px);*/
                            /*filter: blur(5px);*/
                        ">
                        <img src="img/s14team/piyapa-chongsathien.png" class="profile" id="photo" alt="img">
                        <div class="team-classic-overlay">
                            {{--<div class="team-classic-content">--}}
                                {{--<a href="#">--}}
                                    {{--<i class="fab fa-facebook"></i>--}}
                                {{--</a>--}}
                                {{--<a href="#"><i class="fab fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fab fa-instagram"></i></a>--}}
                                {{--<a href="#"><i class="fab fa-google"></i></a>--}}
                            {{--</div>--}}
                            <a href="/team/piyapa-chongsathien">
                                <div class="team-classic-name">
                                    <h4>Ms. Piyapa Chongsathien</h4>
                                    <h6 class="italic libre-baskerville">
                                        Founder & Managing Director
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-4 col-12">
                    <div class="team-classic"><img
                                src="https://images.pexels.com/photos/1571877/pexels-photo-1571877.jpeg?cs=srgb&dl=accomplishment-achievement-adult-1571877.jpg&fm=jpg"
                                style="max-height: 450px;" alt="img">
                        <div class="team-classic-overlay">
                            <a href="/team">
                                <div class="team-classic-name">
                                    <h4>Meet our Team</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-block-grey" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-12">
                    <div class="section-heading left-holder">
                        <h4 class="bold">Delivering results that endure. Strategy and technology consultants to the
                            world.</h4>
                        <div class="section-heading-line"></div>
                    </div>
                    <div class="text-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodoconsequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="mt-20"><a href="#" class="primary-button-bordered button-md">Contact Us</a></div>
                </div>
                <div class="col-md-4 col-sm-4 col-12 offset-md-1">
                    <div class="contact-form-md white-background shadow-light center-holder">
                        <h5>Request a Callback</h5>
                        <form method="get" action="#" class="mt-30"><input type="text" name="name"
                                                                           placeholder="Your Name"><input type="email"
                                                                                                          name="email"
                                                                                                          placeholder="Your Email"><input
                                    type="text" name="phone" placeholder="Your Phone Number">
                            <button type="submit" class="primary-button button-sm full-width">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-block section-sm">
        <div class="container">
            <div class="owl-carousel owl-theme clients" id="clients">
                <div class="item"><img src="img/content/clients/c-1.png" alt="img"></div>
                <div class="item"><img src="img/content/clients/c-2.png" alt="img"></div>
                <div class="item"><img src="img/content/clients/c-3.png" alt="img"></div>
                <div class="item"><img src="img/content/clients/c-4.png" alt="img"></div>
                <div class="item"><img src="img/content/clients/c-5.png" alt="img"></div>
                <div class="item"><img src="img/content/clients/c-6.png" alt="img"></div>
            </div>
        </div>
    </div>




@endsection
@section('scripts')
    
@endsection


