<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Http\Request;
use App\Year;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semester=Semester::all();

        return view('semester.index',compact('semester'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $years=Year::all();
        return view('semester.create',compact('years'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //  dd($request);
        $validate=$request->validate([
            'name' => 'required',
            'year' => 'required',
            'examDate' => 'required',
          
        ]);

        if ($request->input('current') == 'on') {
          $current=1;
        }else {
          $current=0;
        }

        if ($validate) {
          $store=Semester::create([
            'name'=>$request->input('name'),
            'year_id'=>$request->input('year'),
            'exam_date'=>$request->input('examDate'),
            'current' =>$current,
          ]);

          flash('Semester created')->success()->important();
          return redirect()->route('semester.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function show(Semester $semester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function edit(Semester $semester)
    {
        $years=Year::all();
        return view('semester.edit', compact('semester','years'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semester $semester)
    {
      $validate=$request->validate([
          'name' => 'required',
          'year' => 'required',
          'examDate' => 'required',

      ]);


      if ($request->input('current') == 'on') {
        $current=1;
      }else {
        $current=0;
      }

        $updateSemester=Semester::where('id',$semester->id)->update([
          'name'=>$request->input('name'),
          'year_id'=>$request->input('year'),
          'exam_date'=>$request->input('examDate'),
          'current' =>$current,
        ]);

        flash('Semester updated')->success()->important();
        return redirect()->route('semester.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function destroy($semester)
    {
        $delete=Semester::where('id',$semester)->delete();
        if ($delete) {
          flash('Semester Deleted');
          return back();
        }
    }
}
