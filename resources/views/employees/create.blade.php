@extends('layouts.app')
@section('head')
    @trixassets
    <style>
        trix-editor {
            height: 400px !important;
            overflow-y: auto !important;
        }
    </style>
@endsection
@section('content')

    <div class="container min-vh-100 p-5" style="">

        <form action="{{ route('employees.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="rank">Rank</label>
                <input required type="number" class="form-control" id="rank" name="rank" placeholder="Rank"
                       value="{{ old('rank', $employee->rank) }}">
                @if($errors->has('rank'))
                    <span class="help-text text-danger">{{ $errors->first('rank') }}</span>
                @endif
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="eng_full_name">English Full Name</label>
                        <input required type="text" class="form-control" id="eng_full_name" name="eng_full_name"
                               placeholder="English Full Name"
                               value="{{ old('eng_full_name', $employee->eng_full_name) }}">
                        @if($errors->has('eng_full_name'))
                            <span class="help-text text-danger">{{ $errors->first('eng_full_name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="thai_full_name">Thai Full Name</label>
                        <input required type="text" class="form-control" id="thai_full_name" name="thai_full_name"
                               placeholder="Thai Full Name"
                               value="{{ old('thai_full_name', $employee->thai_full_name) }}">
                        @if($errors->has('thai_full_name'))
                            <span class="help-text text-danger">{{ $errors->first('thai_full_name') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="eng_designation">English Designation</label>
                        <input required type="text" class="form-control" id="eng_designation" name="eng_designation"
                               placeholder="English Designation"
                               value="{{ old('eng_designation', $employee->eng_designation) }}">
                        @if($errors->has('eng_designation'))
                            <span class="help-text text-danger">{{ $errors->first('eng_designation') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="thai_designation">Thai Designation</label>
                        <input required type="text" class="form-control" id="thai_designation" name="thai_designation"
                               placeholder="Thai Designation"
                               value="{{ old('thai_designation', $employee->thai_designation) }}">
                        @if($errors->has('thai_designation'))
                            <span class="help-text text-danger">{{ $errors->first('thai_designation') }}</span>
                        @endif
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="pic">Picture</label>
                <input type="file" accept="image/*" class="form-control" id="pic" name="pic" placeholder="Picture"
                       value="{{ old('pic') }}">
                @if($errors->has('pic'))
                    <span class="help-text text-danger">{{ $errors->first('pic') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="eng_description">English Description</label>
                @trix(\App\Employee::class,'eng_description')
            </div>

            <div class="form-group">
                <label for="eng_description">Thai Description</label>
                @trix(\App\Employee::class,'thai_description')
            </div>


            <div class="m-form__actions">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Clear</button>
            </div>
        </form>

    </div>

@endsection
@section('scripts')

@endsection


