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
                <th>Pic</th>
                <th></th>
            </tr>
            </thead>
            @forelse($employees as $employee)
                <tr>
                    <td>
                        {{ $emp->id }}
                    </td>
                    <td>
                        {{ $emp->rank }}
                    </td>
                    <td>
                        {{ $emp->full_name }}
                    </td>
                    <td>
                        {{ $emp->pic_url }}
                    </td>
                    <td>

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


