<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Faculty;

class LecturerController extends Controller
{
    public function index()
    {

      $lecturers=User::where('role_id',2)->get();
      return view('lecturer.index',compact('lecturers'));

    }

    public function create()
    {
      $faculties=Faculty::all();
      return view('lecturer.create',compact('faculties'));
    }

    public function store(Request $request)
    {

      $createLecturer=User::create([
        'role_id' =>2,
        'name' => $request->input('name'),
        'email' =>$request->input('email'),
        'faculty_id'=>$request->input('faculty'),
        'password' =>bcrypt('password')
      ]);

      if($createLecturer){
        flash('Lecture Created')->success();
        return redirect()->route('lecturer.index');
      }
    }

    public function edit( $id)
    {
          $faculties=Faculty::all();
          $lecturer=User::where('id',$id)->get();

          return view('lecturer.edit',compact('lecturer','faculties'));
    }

    public function update(Request $request, $id)
    {
      $validate=$request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'faculty' => 'required'
      ]);
      $upateLecturer=User::where('id',$id)->update([
        'role_id' =>2,
        'name' => $request->input('name'),
        'email' =>$request->input('email'),
        'faculty_id'=>$request->input('faculty'),
        'password' =>bcrypt('password')
      ]);

      if($upateLecturer){
        flash('Lecture Updated')->success();
        return redirect()->route('lecturer.index');
      }

    }


}
