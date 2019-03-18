<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exam;
use App\Unit;
use App\Faculty;
use App\Registerunit;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //Fetch users
      $user=User::all()->count();

       //fetch Exams;
       $exam=Exam::all()->count();

      //units
      $unit=Unit::all()->count();

      //faculties
      $fuculty=Faculty::all()->count();

      $registered=Registerunit::all()->count();

       //Fetch units
       return view('dashboard.index', compact('user','exam','unit','faculty','registered'));
    }
}
