<?php

namespace App\Http\Controllers;

use App\Mark;
use App\Programme;
use App\Registerunit;
use App\User;

use App\Jobs\QueueNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Programme::all();

        //Fetch all registered saveUnits
          $registeredUnit=Registerunit::all();

        return view('mark.index',compact('courses','registeredUnit'));
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

    public function calculateGrade($mark)
    {

        if ($mark >= 70) {
          return 'A';
        }else if($mark <70 && $mark >=60){
          return 'B';
        }else if($mark <60 && $mark >=50){
          return 'C';
        }else if($mark <50 && $mark >=40){
          return 'D';
        }else if($mark <40 && $mark>=1){
          return 'F';
        }
      return '-';
    }

    public function store(Request $request)
    {

      foreach ($request->all() as $key => $value) {

         if(is_int($key)){

           //Update marks
           $updateMarks=Registerunit::where('id',$key)->update([
             'mark'=>$value,
             'grade' =>$this->calculateGrade($value),
           ]);
           //Send Notifications
           $regno=Registerunit::where('id',$key)->value('regno');
           $user=User::where('regno',$regno)->value('email');

           //dd($value);
           dispatch(new QueueNotification($user,$value));


         }
      }

      flash('Marks updated')->success();
      return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function show(Mark $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function edit(Mark $mark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mark $mark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
