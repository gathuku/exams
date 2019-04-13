<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;
use Auth;
use App\Year;
use App\Semester;
use Carbon\Carbon;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //get the Semesters
        $currentYear=Carbon::now()->year;
        $yearid=Year::where('name',$currentYear)->value('id');
        $semesters=Semester::where('year_id',$yearid)
                                 ->where('current',true)
                                ->get();

        $sessions=Session::where('regno',Auth::user()->regno)->get();
        return view('session.index',compact('sessions','semesters','currentYear','yearid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $semesterID=$request->input('semester');
        $now=Carbon::now();

        $session=Session::where('semester_id',$semesterID)->value('semester_id');
        if($session == $semesterID){
          flash('You have alredy reported')->error();
          return back();
        }
        $createSession=Session::create([
          'regno'=>Auth::user()->regno,
          'year_id'=>$request->input('yearID'),
          'semester_id'=>$semesterID,
          'status' => true,
        ]);

        //Update in Sesion
        User::where('id',Auth::user()->id)->update([
          'in_session'=>true
        ]);

        if($createSession){
          flash('You have reported on:'.$now)->success();
          return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function show(Session $session)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function edit(Session $session)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Session $session)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session $session)
    {
        //
    }
}
