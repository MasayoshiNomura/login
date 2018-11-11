<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $employee = Employee::all();
        return view('home', compact(["employee"]));
    }

    public function employee(){
        $employee = Employee::all();
        return view('employee', compact(["employee"]));
    }

    public function employee_form(){
        $employee = Employee::all();
        return view('employee_form', compact(["employee"]));
    }

    public function store(Request $request) {
        $employee = new Employee;
        $employee->employee_number = $request->employee_number;
        $employee->department = $request->department;
        $employee->position = $request->position;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->sexuality = $request->sexuality;
        $employee->email = $request->email;
        $employee->tel = $request->tel;
        $employee->skill = $request->skill;
        $employee->note = $request->note;
        $employee->save();

        return view('employee_form');
    }

}
