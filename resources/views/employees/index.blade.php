@extends('layouts.app')
@section('head')

@endsection
@section('content')

    <div class="container min-vh-100 p-5" style="">
        <div class="d-flex justify-content-end">
            <div>
                <a href="employees/create" class="btn btn-primary">
                    <i class="fa fa-plus mr-2"></i>
                    Add Employee
                </a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Rank</th>
                <th>Full Name</th>
                <th>Designation</th>
                <th>Pic</th>
                <th></th>
            </tr>
            </thead>
            @forelse($employees as $emp)
                <tr>
                    <td>
                        {{ $emp->id }}
                    </td>
                    <td>
                        {{ $emp->rank }}
                    </td>
                    <td>
                        {{ $emp->eng_full_name }}<br>
                        {{ $emp->thai_full_name }}
                    </td>
                    <td>
                        {{ $emp->eng_designation }}<br>
                        {{ $emp->thai_designation }}
                    </td>
                    <td>
                        {{ $emp->pic_url }}
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('employees.show', $emp->url_slug) }}">
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No employees added yet!</td>
                </tr>
            @endforelse
        </table>

    </div>


@endsection
@section('scripts')

@endsection


