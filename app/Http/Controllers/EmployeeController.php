<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all()->sortBy('rank');
        return view('employees.index')->with([
            'employees' => $employees
        ]);
    }

    public function create()
    {
        return view('employees.create');
    }

}
