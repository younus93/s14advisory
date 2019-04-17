@extends('layouts.app')
@section('head')

@endsection
@section('content')

    <div class="section-block-parallax jarallax black-overlay-20" data-jarallax data-speed="0.6"
         style="background-image: url('https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="large-heading center-holder">
                <h2 class="white-color">We'd love to have you on board with us!</h2>
                <div class="section-heading-line"></div>
            </div>
            {{--<div class="mt-25 center-holder"><a href="#" class="white-button button-md">Become a Client</a></div>--}}
        </div>
    </div>

    <div class="section-block">
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
    </div>


@endsection
@section('scripts')

    <script></script>

@endsection



