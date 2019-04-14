<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exam;
use App\Unit;
use App\Faculty;
use App\Registerunit;
use Auth;

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
      $unit=Unit::where('program_id',Auth::user()->program_id)->count();

      //faculties
      $faculty=Faculty::all()->count();



      $registered=Registerunit::all()->count();

      $retakes=Registerunit::where('grade','F')
                            ->where('regno',Auth::user()->regno)
                            ->count();
      $retakesadmin=Registerunit::where('grade','F')->count();

       //Fetch units
       return view('dashboard.index', compact('user','exam','unit','faculty','registered','retakes','retakesadmin'));
    }
}
