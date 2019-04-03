@extends('layouts.app')
@section('head')
    <style>
        .profile {
            max-height: 450px;
            max-width: 360px;
            left: -120px;
            position: relative;
            transition: ease-in 0.4s;
        }

        .team-member {
            overflow: hidden;
        }

        .team-member:hover .profile {
            transform: translateX(120px);
        }
    </style>
@endsection
@section('content')

    <div class="page-title jarallax black-overlay-20" data-jarallax="" data-speed="0.6"
         style="background-image: none; z-index: 0;"
         data-jarallax-original-styles="background-image: url('img/content/bgs/bg1.jpg');">
        <div class="container"><h1>Team</h1>
        </div>
        <div id="jarallax-container-0"
             style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">
            <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;http://specthemes.com/webmaker/webmaker-demo/img/content/bgs/bg1.jpg&quot;); position: absolute; top: 0px; left: 0px; width: 1280px; height: 388px; overflow: hidden; pointer-events: none; margin-top: -42px; transform: translate3d(0px, -36.4px, 0px);"></div>
        </div>
    </div>

    <div class="section-block">
        <div class="container">
            <div class="small-heading center-holder mb-30"><span class="uppercase">Founder & Managing Director</span>
            </div>
            <div class="row justify-content-center mt-0">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="team-circle">
                        <a href="{{ url("team/piyapa-chongsathien") }}">
                            <div class="team-circle-img"><img src="/img/s14team/piyapa-chongsathien.png" alt="img">
                            </div>
                            <div class="team-circle-text"><h4><a href="#"></a></h4> <h5
                                        class="italic libre-baskerville">Ms. Piyapa Chongsathien</h5>
                                <ul class="team-circle-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-heading center-holder mb-30"><span class="uppercase">Vice Presidents</span></div>
            <div class="row justify-content-center mt-0">
                @foreach($team as $slug => $person)
                    @if($person['role'] == 'Vice President')
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="team-circle">
                                <a href="{{ url("team/{$slug}") }}">

                                    <div class="team-circle-img"><img src="/img/s14team/{{ $slug }}.png" alt="img">
                                    </div>
                                    <div class="team-circle-text"><h4><a href="#"></a></h4> <h5
                                                class="italic libre-baskerville">{{ $person['name'] }}</h5>
                                        <ul class="team-circle-social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="small-heading center-holder mb-30"><span class="uppercase">Managers</span></div>
            <div class="row justify-content-center mt-0">
                @foreach($team as $slug => $person)
                    @if($person['role'] == 'Manager')
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="team-circle">
                                <a href="{{ url("team/{$slug}") }}">

                                    <div class="team-circle-img"><img src="/img/s14team/{{ $slug }}.png" alt="img">
                                    </div>
                                    <div class="team-circle-text"><h4><a href="#"></a></h4> <h5
                                                class="italic libre-baskerville">{{ $person['name'] }}</h5>
                                        <ul class="team-circle-social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection


