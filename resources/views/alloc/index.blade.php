@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i> Allocate Units to lecturers</h1>

       </div>

     </div>

     @include('partials.error')
     @include('partials.success')
     @include('flash::message')

     <div class="row">
       <div class="col-md-12">
         <div class="tile">
           <div class="tile-body">
          <form class="" action="{{route('alloc.fetch')}}" method="post">
            @csrf
             <div class="row">
               <div class="form-group col-md-3">
                 <label for="">Select course</label>
                 <select class="form-control" name="program">
                   <option value="">-- select --</option>
                   @foreach($courses as $course)
                   <option value="{{$course->id}}">{{$course->name}}</option>
                   @endforeach
                 </select>
               </div>
               <div class="form-group col-md-3">
                 <label for="">Select Year</label>

                 <select class="form-control" name="level">
                    <option value="">-- select --</option>
                   <option value="0">1st Year</option>
                   <option value="1">2nd year</option>
                   <option value="2">3rd Year</option>
                   <option value="3">4th year</option>
                 </select>
               </div>
               <div class="form-group col-md-2">

                <button class="btn btn-primary" type="submit" name="button">Fetch</button>
               </div>

             </div>
         </form>

         <form class="" action="{{route('allocation.store')}}" method="post">
           @csrf
           <input type="hidden" name="program" value="{{$program}}">
             <table class="table table-hover " id="usersTable">
               <thead>
                 <tr>
                   <th>ID</th>
                   <td>Code</td>
                   <th>Name</th>
                   <th>Lecturer</th>
                 </tr>
               </thead>
               <tbody>

                @foreach($units as $unit)
                 <tr>
                   <td>{{$unit->id}}</td>
                    <td>{{$unit->code}}</td>
                   <td>{{$unit->name}}</td>
                   <td>
                   <div class="form-group">
                     <select class="form-control" name="{{$unit->id}}">
                       <option value="">-- select --</option>
                       @foreach($lecturers as $lecturer)
                       <option value="{{$lecturer->id}}">{{$lecturer->name}}</option>
                       @endforeach
                     </select>
                   </div>
                   </td>

                 </tr>
                 @endforeach

               </tbody>
             </table>
             <div class="form-group">
               <button class="btn btn-primary" type="submit" name="button">Allocate</button>
             </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </main>

   @endsection
