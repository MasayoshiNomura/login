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

}
