@extends('layouts.app')
@section('head')
    @trixassets
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <style>
        .project-single-text  ul {
            list-style: none;
            padding: 0;
        }
        .project-single-text  li {
            padding-left: 1.3em;
        }
        .project-single-text  li:before {
            content: "\f058"; /* FontAwesome Unicode */
            color: #52ab22;
            font-family: FontAwesome;
            display: inline-block;
            margin-left: -1.3em; /* same as padding-left set on li */
            width: 1.3em; /* same as padding-left set on li */
        }
    </style>
@endsection
@section('content')
    <div class="section-block">
        <div class="container">
            <div class="project-single">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-12">
                        <img src="{{ url("images/{$employee->pic_url}") }}" alt="emp_pic">
                    </div>
                    <div class="col-md-8 col-sm-8 col-12">
                        <div class="project-single-text pr-30-md">
                            <h4>{{ $employee->eng_full_name }}</h4>
                            <div>{!! $employee->trixRichText()->where('field', 'eng_description')->first()->content !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

@endsection


