<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Faculty;
use App\Programme;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $faculties=Faculty::all();

        $courses=Programme::all();

        $units=Unit::all();
        return view('unit.index',compact('units','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses=Programme::all();
        flash('welcome, you can create a new unit here...')->info();
        return view('unit.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'course' => 'required',
          'name' => 'required',
          'code' => 'required',
          'hours' => 'required',
          'year' => 'required'
        ]);

        if(Auth::check()){
          $createUnit=Unit::create([
            'course' => $request['course'],
            'name' => $request['name'],
            'code' => $request['code'],
            'hours' => $request['hours'],
            'year' => $request['year'],
          ]);
        }

        flash('Unit created')->success();
        return redirect()->route('unit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //
    }

    public function unitChange(Request $request)
    {
      $courses=Programme::all();
      $courseId=$request['course'];
      //dd($courseId);
      $units=Unit::where('program_id',$courseId)->get();
      return view('unit.index', compact('units','courses'));
    }
}
