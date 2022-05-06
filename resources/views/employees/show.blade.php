@extends('layouts.app')
@section('head')
    @trixassets
@endsection
@section('content')
    <div class="section-block">
        <div class="container">
            <div class="project-single">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-12">
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


