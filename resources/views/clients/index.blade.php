@extends('layouts.app')
@section('head')
    <style>
        .disabled {
            pointer-events: none;

            /* for "disabled" effect */
            opacity: 0.2;
            /*background: #CCC;*/
        }
        .p-20{
            padding: 20px 20px;
        }
    </style>
@endsection
@section('content')

    <div class="section-block-parallax jarallax black-overlay-20" data-jarallax data-speed="0.6"
         style="background-image: url('/img/content/bgs/bg3.png');">
        <div class="container">
            <div class="large-heading center-holder">
                <h2 class="white-color">Delivering results that endure!</h2>
                <div class="section-heading-line"></div>
            </div>
            {{--<div class="mt-25 center-holder"><a href="#" class="white-button button-md">Become a Client</a></div>--}}
        </div>
    </div>

    <div class="section-block @if(!$visitor) disabled @endif">
        <div class="container">
            <div class="grid-gallery-3col clearfix">
                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                        <div class="project-classic d-flex flex-column justify-content-center" style="height: 300px; width: 300px; background: #101949">
                            <img src="/img/clients/general-beverage.png" class="p-20" alt="img">
                            <div class="project-classic-overlay">
                                <div class="project-classic-content">
                                    <div class="project-classic-content-inner">
                                        <h3>{{ __("General Beverage COMPANY LIMITED") }}</h3>
                                        <h5>{{ __("General Financial Advisory") }}</h5>
                                        <h5>{{ __("2015") }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{--</a>--}}
                </div>
                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg" style="height: 300px; width: 300px;">
                        <img src="/img/clients/pylon.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("PYLON PUBLIC COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("General Financial Advisory") }}</h5>
                                    <h5>{{ __("2015") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>
                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg" style="height: 300px; width: 300px;">
                        <img src="/img/clients/siam.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("SIAM SPORT SYNDICATE PUBLIC COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("Issuance of Warrant Issues") }}</h5>
                                    <h5>{{ __("2016") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>
                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg" style="height: 300px; width: 300px;">
                        <img src="/img/clients/siam.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("NATHALIN COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("Providing the Share Valuation") }}</h5>
                                    <h5>{{ __("2016") }}</h5>
                                    <h5>{{ __("Independent Financial Advisor") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg" style="height: 300px; width: 300px;">
                        <img src="/img/clients/eic.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("ELECTRONICS INDUSTRY PUBLIC COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("Providing the Share Valuation") }}</h5>
                                    <h5>{{ __("December 2016") }}</h5>
                                    <h5>{{ __("Independent Financial Advisor") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg" style="height: 300px; width: 300px;">
                        <img src="/img/clients/cpl.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("C.P.L GROUP PUBLIC COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("THB 530,995,211.76") }}</h5>
                                    <h5>{{ __("January 2017") }}</h5>
                                    <h5>{{ __("Independent Financial Advisor") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg" style="height: 300px; width: 300px;">
                        <img src="/img/clients/cpl.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("C.P.L GROUP PUBLIC COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("THB 440,969,521.40") }}</h5>
                                    <h5>{{ __("January 2017") }}</h5>
                                    <h5>{{ __("Independent Financial Advisor") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg" style="height: 300px; width: 300px;">
                        <img src="/img/clients/country.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("Country Group Development Public Company Limited") }}</h3>
                                    <h5>{{ __("THB 1,069,560,703") }}</h5>
                                    <h5>{{ __("March 2017") }}</h5>
                                    <h5>{{ __("Independent Financial Advisor") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg" style="height: 300px; width: 300px;">
                        <img src="/img/clients/aq.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("AQ ESTATE PUBLIC COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("THB 206,807,000") }}</h5>
                                    <h5>{{ __("July 2017") }}</h5>
                                    <h5>{{ __("Independent Financial Advisor") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg"
                         style="background : #034ea2; height: 300px; width: 300px;">
                        <img src="/img/clients/blissel.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("BLISS-TEL PUBLIC COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("THB 206,807,000") }}</h5>
                                    <h5>{{ __("July 2017") }}</h5>
                                    <h5>{{ __("Independent Financial Advisor") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg"
                         style="height: 300px; width: 300px;">
                        <img src="/img/clients/itc.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("INFORMATION TECHNOLOGY GROUP COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("December 2017") }}</h5>
                                    <h5>{{ __("Providing the Share Valuation") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg"
                         style="height: 300px; width: 300px;">
                        <img src="/img/clients/takuni.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("TAKUNI GROUP COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("THB 41,550,000") }}</h5>
                                    <h5>{{ __("May 2017") }}</h5>
                                    <h5>{{ __("Independent Financial Advisor") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg"
                         style="height: 300px; width: 300px;">
                        <img src="/img/clients/foodcapitals.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("FOOD CAPITALS PUBLIC COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("THB 4,018,000,000") }}</h5>
                                    <h5>{{ __("December 2018") }}</h5>
                                    <h5>{{ __("Independent Financial Advisor") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

                <div class="gallery-item mt-0 mb-0">
                    {{--<a href="#">--}}
                    <div class="project-classic d-flex flex-column justify-content-center grey-bg"
                         style="height: 300px; width: 300px;">
                        <img src="/img/clients/digi.png" class="p-20" alt="img">
                        <div class="project-classic-overlay">
                            <div class="project-classic-content">
                                <div class="project-classic-content-inner">
                                    <h3>{{ __("DIGITAL TECH PLANET PUBLIC COMPANY LIMITED") }}</h3>
                                    <h5>{{ __("THB 203,287,262.11") }}</h5>
                                    <h5>{{ __("January 2019") }}</h5>
                                    <h5>{{ __("Tender Offer Preparer") }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--</a>--}}
                </div>

            </div>
        </div>
    </div>

    @if(!$visitor)
        <div class="izimodal iziModal" id="modal6" data-izimodal-width="450px" data-izimodal-fullscreen="true"
             data-izimodal-transitionin="comingIn" aria-hidden="false" aria-labelledby="modal6" role="dialog"
             style="z-index: 999999; border-radius: 3px; max-width: 450px; display: block; max-height: 400px;">
            <div class="iziModal-wrap" style="height: auto;">
                <div class="iziModal-content" style="padding: 0px;">
                    <div class="modal-inside row no-gutters">
                        <div class="inner-45 full-width">
                            <div class="primary-form mt-25">
                                <div id="details">
                                    <div class="modal-heading center-holder">
                                        <h4>Log in to view details</h4>
                                        <h6 class="grey-color light mt-5"></h6>
                                    </div>
                                    <form id="loginForm">
                                        <input type="text" name="name" required id="name" placeholder="Name"
                                               autocomplete="off">
                                        <input type="text" name="email" required id="email" placeholder="E-mail Address"
                                               autocomplete="off">
                                        <input type="text" name="phone" required id="phone" placeholder="Phone Number"
                                               autocomplete="off">
                                        <button type="submit" class="primary-button button-sm full-width semi-rounded">
                                            Login
                                        </button>
                                    </form>
                                </div>
                                <div id="otp" class="d-none">
                                    <div class="modal-heading center-holder">
                                        <h4>Please enter OTP</h4>
                                        <h6 id="message" class="grey-color light mt-5"></h6>
                                    </div>
                                    <form action="{{ url('/our-clients') }}">
                                        @csrf
                                        <input type="text" hidden name="email" id="otpEmail">
                                        <input type="text" name="otp" id="otp" placeholder="Enter OTP" required
                                               autocomplete="off">
                                        <button class="primary-button button-sm full-width semi-rounded">
                                            Login
                                        </button>
                                    </form>
                                    <button onclick="back()"
                                            class="button-default button-sm full-width semi-rounded">
                                        Back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iziModal-overlay" style="background-color: rgba(0, 0, 0, 0.7); z-index: 999997;"></div>
    @endif
@endsection
@section('scripts')
    <script>
        $("#loginForm").submit(function (e) {
            e.preventDefault();
            submitClientForm();
        });

        function submitClientForm() {
            let detailsDiv = $('#details');
            let name = $('#name');
            let email = $('#email');
            let phone = $('#phone');
            let msg = $('#message');
            let otpDiv = $('#otp');
            detailsDiv.fadeOut();
            msg.html("Dear " + name.val() + ", Please enter the OTP Sent to your email address to view details");
            msg.removeClass("d-none");
            otpDiv.removeClass("d-none");
            $('#otpEmail').val(email.val());
            submitForm(name.val(), email.val(), phone.val());
        }

        function back() {
            $('#loginForm').trigger("reset");
            $('#details').fadeIn();
            $('#otp').addClass('d-none');
        }

        function submitForm(name, email, phone) {
            $.post("{{ url('/our-clients') }}", {
                    _token: '{!! csrf_token() !!}',
                    name: name,
                    email: email,
                    phone: phone
                },
                function (data, status) {
                    alert('Email has been sent successfully!');
                }
            );
        }
    </script>
@endsection


