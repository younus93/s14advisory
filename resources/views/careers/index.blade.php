@extends('layouts.app')
@section('head')

@endsection
@section('content')
    
    <!-- <div class="section-block-parallax jarallax black-overlay-20" data-jarallax data-speed="0.6"
         style="background-image: url('https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="large-heading center-holder">
                <h2 class="white-color">We'd love to have you on board with us!</h2>
                <div class="section-heading-line"></div>
            </div>
            {{--<div class="mt-25 center-holder"><a href="#" class="white-button button-md">Become a Client</a></div>--}}
        </div>
    </div> -->
    <div id='career-top-section'>
        <div class="career-bg">
            <div class="container">
                <div class="col-md-5">
                    <h3>Drop in a message</h3>
                    <div class="text-content">
                            <p>If you enjoy to work in a highly paced challenging environment where your actions directly
                                impacts the results,
                                we are the right destination for you. Drop in your details along with a detailed resume and
                                we will get back to you.</p>
                    </div>
                </div>
                <div class="career-img">
                    <img src='/img/careers-bg1.jpeg' alt=''/>
                </div>
            </div>
        </div>
    </div>

    <section class="positions">
        <div class="container pt-5">
            <h4 class="join-our-team">Join our team.</h4>

            <div>
                <p class="opening-heading">
                    Positions open
                </p>

                <div class="row justify-content-center pb-4">
                    <div class="col-md-8">
                        <div class="openings my-3">
                            <p class="opening-name mb-0">Vice President</p>
                            <a href='/careers/vice-president'>View</a>
                        </div>
                        <div class="openings my-3">
                            <p class="opening-name mb-0">Investment Banking</p>
                            <a href='/careers/investment-banking'>View</a>
                        </div>
                        <div class="openings my-3">
                            <p class="opening-name mb-0">Finance Analyst</p>
                            <a href='/careers/finance-analyst'>View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-12">
                    <div class="section-heading left-holder mt-10">
                        <h3 class="bold">Drop in a message</h3>
                        <div class="section-heading-line"></div>
                    </div>
                    <div class="text-content">
                        <p>If you enjoy to work in a highly paced challenging environment where your actions directly
                            impacts the results,
                            we are the right destination for you. Drop in your details along with a detailed resume and
                            we will get back to you.</p>
                    </div>
                    <div class="section-heading left-holder mt-10">
                        <h3 class="bold">Positions open</h3>
                        <div class="section-heading-line"></div>
                    </div>
                    <div class="text-content">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a target="_blank" href="{{ asset('ประกาศหางาน Vice President.pdf') }}">Vice President</a>
                                <a target="_blank" href="/careers/vice-president">Vice President</a>
                            </li>
                            <li class="list-group-item">
                                <a target="_blank" href="{{ asset('Investment Banking (Manager).pdf') }}">Investment Banking</a>
                            </li>
                        </ul>
                    </div>
                    @if($message)
                        <div class="section-heading left-holder mt-10">
                            <h3 class="bold">Thanks for applying!</h3>
                            <div class="section-heading-line"></div>
                        </div>
                    @endif
                </div>
                <div class="col-md-6 col-sm-6 col-12 offset-md-1">
                    <form method="post" id="resumeForm" action="/careers" class="primary-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <input required autocomplete="off" type="text" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <input required autocomplete="off" type="email" id="email" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <input required autocomplete="off" type="text" id="phone" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="col-12">
                                <input required autocomplete="off" type="file" id="resume" name="resume" placeholder="Resume">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="primary-button button-sm full-width semi-rounded">
                                    Apply!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


@endsection
@section('scripts')

    <script>
        // $(document).ready(function (){
        //     $('.navigation-fixed-wrapper').addClass('without-scroll')
        // })
        // $(document).scroll(function(){
           
        //     var $nav = $(".navigation-fixed-wrapper");
        //     $nav.toggleClass('scrolling',$(this).scrollTop() > $nav.height())
        //     $nav.toggleClass('without-scroll', $(this).scrollTop() < $nav.height());
        // })
    </script>

@endsection