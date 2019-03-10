@extends('layouts.main')
@section('content')

<main class="app-content">
  <div class="app-title">
      <div>

        <h3>Edit Student</h3>
      </div>
      <ul class="app-breadcrumb breadcrumb">
       <button class="btn btn-success" type="button" name="button">Back</button>
      </ul>
    </div>

    @include('partials.error')
    @include('partials.success')
    @include('flash::message')

    <div class="row">
      <div class="col-md-12">
         <div class="tile">
           <h3 class="tile-title">Fill the Details</h3>
           <div class="tile-body col-md-6">
             <form method="post" action="/user/{{$user->id}}">
               @csrf
               <input type="hidden" name="_method" value="PUT">
               <div class="form-group">
                 <label class="control-label">Name</label>
                 <input value="{{$user->name}}" name="name" class="form-control" type="text" placeholder="Enter full name">
               </div>
               <div class="form-group">
                 <label class="control-label">Reg No</label>
                 <input value="{{$user->regno}}" name="regno" class="form-control" type="text" placeholder="Enter reg no">
               </div>
               <div class="form-group">
                 <label class="control-label">Email</label>
                 <input value="{{$user->email}}"  name="email" class="form-control" type="email" placeholder="Enter email address">
               </div>

               <div class="form-group">
                 <label class="control-label">Faculty</label>
                <select class="form-control" name="faculty" selected="{{$user->faculty->name}}">
                  <option value="">-- select --</option>
                  @foreach($faculties as $faculty)
                  <option value="{{$faculty->id}}">{{$faculty->name}}</option>

                  @endforeach
                </select>
               </div>

               <div class="form-group">
                 <label class="control-label">Programme</label>
                <select class="form-control" name="programme" selected="{{$user->program->name}}">
                  <option value="">-- select --</option>
                  @foreach($programmes as $programme)
                  <option value="{{$programme->id}}">{{$programme->name}}</option>

                  @endforeach
                </select>
               </div>

               <div class="form-group">
                 <label class="control-label">Academic Year</label>
                <select class="form-control" name="year" selected="{{$user->year->name}}">
                  <option value="">-- select --</option>
                  @foreach($years as $year)
                  <option value="{{$year->id}}">{{$year->name}}</option>

                  @endforeach
                </select>
               </div>


               <div class="form-group">
                 <div class="form-check">
                   <label class="form-check-label">
                     <input class="form-check-input" type="checkbox">Is student in Session
                   </label>
                 </div>
               </div>

               <div class="tile-footer">
                 <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
               </div>
             </form>
           </div>

         </div>
       </div>

    </div>
</main>
@endsection
