@extends('layouts.app')
@section('head')

@endsection
@section('content')
    <div class="section-block">
        <div class="container">
            <div class="project-single">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-12">
                        <img src="/img/s14team/{{ $slug }}.png" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8 col-12">
                        <div class="project-single-text pr-30-md"><h4>{{ __($person['name']) }}</h4>
                            <p>{{ __($person['bio']) }}</p>
                            @if(array_key_exists('experience',$person))
                                <h4 class="mt-30">Work experience with S14 Advisory Includes</h4>
                                <ul class="primary-list">
                                    @foreach($person['experience'] as $exp)
                                        <li><i class="fa fa-check-circle"></i>{{ __($exp) }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            @if(array_key_exists('past-experience',$person))
                                <h4 class="mt-30">Past work experience includes</h4>
                                <ul class="primary-list">
                                    @foreach($person['past-experience'] as $exp)
                                        <li><i class="fa fa-check-circle"></i>{{ __($exp) }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            @if(array_key_exists('closing',$person))
                                <p class="mt-10">{{ __($person['closing']) }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')

@endsection



