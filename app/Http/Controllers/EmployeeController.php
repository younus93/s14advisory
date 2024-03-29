<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        return view('employees.create')->with([
            'employee' => new Employee()
        ]);
    }

    public function store(Request $request)
    {
        $trix_content = request('employee-trixFields');
        $trix_content = str_replace('h1', 'h4', $trix_content);
        $employee = Employee::create([
            'employee-trixFields' => $trix_content,
            'eng_full_name' => $request->eng_full_name,
            'thai_full_name' => $request->thai_full_name,
            'url_slug' => uniqid(),
            'rank' => $request->rank,
            'eng_designation' => $request->eng_designation,
            'thai_designation' => $request->thai_designation,
        ]);
        $employee->update([
            'url_slug' => sprintf("%s_%s", $employee->id, Str::snake($employee->eng_full_name)),
        ]);
        if ($request->has('pic')) {
            $imageName = time().'.'.$request->pic->extension();
            $request->pic->move(public_path('images'),$imageName);
            $employee->update([
                'pic_url' => $imageName
            ]);
        }
        return redirect('/home');
    }

    public function show($url_slug)
    {
        $employee = Employee::where('url_slug', $url_slug)->firstOrFail();
        return view('employees.show')->with([
            'employee' => $employee
        ]);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back();
    }

    public function team()
    {
        $employees = Employee::all()->groupBy('rank')->sortKeys();
        return view('employees.team')->with([
            'ranks' => $employees
        ]);
    }

}
