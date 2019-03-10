<?php

namespace App\Http\Controllers;

use App\User;
Use App\Programme;
Use App\Faculty;
use App\Year;
use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\Mail;
use App\Mail\UserCreated;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //dd(auth()->user()->program);
        $users=User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $programmes=Programme::all();
       $years=Year::all();
       $faculties=Faculty::all();
      //  return view('users.create', compact('programmes'),compact('years'),compact('faculties'));
        return view('users.create',['programmes'=>$programmes, 'years'=>$years, 'faculties'=>$faculties]);
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
          'name' => 'required|string',
          'regno' => 'required',
          'email' => 'required|email',
           'faculty' =>'required',
          'programme' => 'required',
          'year' => 'required'
        ]);

        if (Auth::check()) {
          $storestudent=User::create([
            'name' =>$request->input('name'),
            'regno' =>$request->input('regno'),
            'email' =>$request->input('email'),
            'faculty_id'=>$request->input('faculty'),
            'program_id' =>$request->input('programme'),
            'year_id' =>$request->input('year'),
            'password' =>bcrypt('secret')
          ]);

          //send email
          flash('User Created')->success();
          \Mail::to($request->input('email'))->send(new UserCreated());


          return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        return view('profile.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      $programmes=Programme::all();
      $years=Year::all();
      $faculties=Faculty::all();
        return view('users.edit',compact('user','programmes','years','faculties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $validate=$request->validate([
        'name' => 'required|string',
        'regno' => 'required',
        'email' => 'required|email',
         'faculty' =>'required',
        'programme' => 'required',
        'year' => 'required'
      ]);

      $updateUser=User::where('id',$user->id)->update([
        'name' =>$request->input('name'),
        'regno' =>$request->input('regno'),
        'email' =>$request->input('email'),
        'faculty_id'=>$request->input('faculty'),
        'program_id' =>$request->input('programme'),
        'year_id' =>$request->input('year'),
        'password' =>bcrypt('secret')
      ]);

      flash('User updated')->success();
      return  redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
