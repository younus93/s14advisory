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

    <div class="section-block-parallax jarallax black-overlay-20" data-jarallax data-speed="0.6"
         style="background-image: url('/img/content/bgs/bg1.jpg');">
        <div class="container">
            <div class="large-heading center-holder">
                <h2 class="white-color">Say hi to our team!</h2>
                <div class="section-heading-line"></div>
            </div>
            {{--<div class="mt-25 center-holder"><a href="#" class="white-button button-md">Become a Client</a></div>--}}
        </div>
    </div>

    <div class="section-block">
        <div class="container">
            <div class="row justify-content-center mt-0">
                @foreach($team as $slug => $person)
                    @if($person['role'] == 'Founder & Managing Director')
                        @include('team.partials._teamBlock1',[
                            'person' => $person
                        ])
                    @endif
                @endforeach
            </div>
            <div class="row justify-content-center mt-0">
                @foreach($team as $slug => $person)
                    @if($person['role'] == 'Vice President')
                        @include('team.partials._teamBlock1',[
                            'person' => $person
                        ])
                    @endif
                @endforeach
            </div>
            <div class="row justify-content-center mt-0">
                @foreach($team as $slug => $person)
                    @if($person['role'] == 'Manager')
                        @include('team.partials._teamBlock1',[
                            'person' => $person
                        ])
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection


