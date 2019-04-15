<?php

namespace App\Http\Controllers;

use App\Allocation;
use Illuminate\Http\Request;
use App\Programme;
use App\Unit;
use App\User;
use App\Semester;
use Auth;

class AllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $units=collect(new Allocation);
        $program="";
        $courses=Programme::where('faculty_id',Auth::user()->faculty_id)->get();

        return view('alloc.index',compact('units','courses','program'));
    }

    public function unitFetch(Request $request)
    {
          $program=$request->input('program');

          $level=$request->input('level');

          $units=Unit::where('program_id',$program)
                      ->where('level',$level)
                     ->get();
          $courses=Programme::where('faculty_id',Auth::user()->faculty_id)->get();

          $lecturers=User::whereIn('role_id',[2,3])
                         ->where('faculty_id',Auth::user()->faculty_id)
                         ->get();

          return view('alloc.index',compact('units','courses','lecturers','program'));
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
      $program=$request->input('program');

      $semester=Semester::where('current',true)->value('id');

        foreach ($request->all() as $key => $value) {
        if(is_int($key) && $value!=null){
          //validate if Allocated
          $check=Allocation::where('course_id',$program)
                            ->where('unit_id',$key)
                            ->exists();
            if ($check == true) {
             flash('Unit with ID'.$key.' already allocated')->error();
             return redirect()->route('allocation.index');
           }else {
             // insert to allocation

            Allocation::create([
              'course_id'=>$program,
              'unit_id' =>$key,
              'lecturer_id'=>$value,
              'semester_id'=>$semester,

            ]);
           }


        }
        }
        flash('Allocated Successfully');
        return redirect()->route('allocation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function show(Allocation $allocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function edit(Allocation $allocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allocation $allocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allocation $allocation)
    {
        //
    }
}
