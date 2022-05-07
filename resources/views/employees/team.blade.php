@extends('layouts.app')
@section('head')

@endsection
@section('content')

    <div class="container min-vh-100 p-5" style="">
        @foreach($ranks as $rankGroup)
            <div class="row justify-content-center">
                @foreach($rankGroup as $employee)
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="team-member">
                            <div class="team-member-image">
                                <a href="{{ route('employees.show', $employee->url_slug) }}">
                                    <img src="{{ url("images/{$employee->pic_url}") }}" style="max-height: 337px;" alt="img">
                                    <div class="team-member-overlay">
                                        <div class="team-member-content">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="team-member-name">
                                <h4>
                                    <a href="{{ route('employees.show', $employee->url_slug) }}">
                                        {{ $employee->eng_full_name }}
                                    </a>
                                </h4>
                                <h6>{{ $employee->eng_designation }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>


@endsection
@section('scripts')

@endsection


