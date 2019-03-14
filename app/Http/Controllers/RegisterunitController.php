<?php

namespace App\Http\Controllers;

use App\Registerunit;
use App\Unit;
use App\Semester;
use Illuminate\Http\Request;
use Auth;

class RegisterunitController extends Controller
{

    protected $i=0;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units=Unit::where('program_id',Auth::user()->program->id)->get();

      //  dd($units);

      return view('registerunit.index', compact('units'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registerunit  $registerunit
     * @return \Illuminate\Http\Response
     */
    public function show(Registerunit $registerunit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registerunit  $registerunit
     * @return \Illuminate\Http\Response
     */
    public function edit(Registerunit $registerunit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registerunit  $registerunit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registerunit $registerunit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registerunit  $registerunit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registerunit $registerunit)
    {
        //
    }

    public function saveUnits(Request $request)
    {

       $data=$request->all();

       $currentSem=Semester::where('current',1)->value('id');
       //\Log::info($currentSem);
      // \Log::info(Auth::user()->regno);

       foreach($data['selected'] as $data){
        // \Log::info($data);
        Registerunit::create([
          'regno' => Auth::user()->regno,
          'unit_id' =>$data,
          'semester_id' => $currentSem,
        ]);
       }

      flash('Units Registered')->success();
    }
}
