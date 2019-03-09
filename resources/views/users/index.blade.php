@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i>Students</h1>

       </div>
       <ul class="app-breadcrumb breadcrumb side">
         <a href="{{route('user.create')}}"> <button class="btn btn-primary" type="button" name="button">New</button></a>

       </ul>
     </div>
     <div class="row">
       <div class="col-md-12">
         <div class="tile">
           <div class="tile-body">
             <table class="table table-hover " id="sampleTable">
               <thead>
                 <tr>
                   <th>#</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Reg No</th>
                   <th>Avatar</th>
                   <th>Course</th>
                   <th>Year</th>
                   <th>In Session</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>

                @foreach($users as $user)
                 <tr>
                   <td>#</td>
                   <td>{{$user->name}}</td>
                   <td>{{$user->email}}</td>
                   <td>{{$user->regno}}</td>
                   <td>
                     @if($user->avatar == null)
                     <div class="app-sidebar__user">
                       <img class="app-sidebar__user-avatar" src="{{$user->gravatar}}" alt="User Image">
                       <div>
                      @else
                      <div class="app-sidebar__user">
                        <img class="app-sidebar__user-avatar" src="{{$user->avatar}}" alt="User Image">
                        <div>
                      @endif
                   </td>
                   <td>{{$user->program->name}}</td>
                   <td>{{$user->year->name}}</td>
                   <td>{{$user->in_session}}</td>

                   <td>
                   <a href="#"><button class="btn btn-primary" data_toggle="tooltip" text="Edit student"><i class="fa fa-pencil-square-o"></button></i></a>
                   <a href="#"><button class="btn btn-info"><i class="fa fa-eye"></button></i></a>
                   <a href="#"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></button></i></a>
                   </td>
                 </tr>
                 @endforeach

               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </main>

   @endsection
