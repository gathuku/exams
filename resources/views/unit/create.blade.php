@extends('layouts.main')
@section('content')

<main class="app-content">
  <div class="app-title">
      <div>

        <h3>New Unit</h3>
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
             <form method="post" action="{{route('unit.store')}}">
               @csrf

               <div class="form-group ">
                 <label for="">Couse</label>
                 <select class="form-control" name="course" id="course_select">
                  <option value="">-- select --</option>
                   @foreach($courses as $course)
                   <option value="{{$course->id}}">{{$course->name}}</option>
                   @endforeach

                 </select>
               </div>
               <div class="form-group">
                 <label class="control-label">Unit Name</label>
                 <input name="name" class="form-control" type="text" placeholder="Enter Unit name">
               </div>

               <div class="form-group">
                 <label class="control-label">Unit Code</label>
                 <input name="code" class="form-control" type="text" placeholder="Enter unit code">
               </div>

               <div class="form-group">
                 <label class="control-label">Unit Hours</label>
                 <input name="hours" class="form-control" type="text" placeholder="Enter hhours">
               </div>



               <div class="form-group">
                 <label class="control-label"> Unit level</label>
                <select class="form-control" name="year">
                  <option value="">-- select --</option>
                   <option value="">1st year</option>
                   <option value="">2nd year</option>
                   <option value="">3rd year</option>
                   <option value="">4th year</option>
                </select>
               </div>
               <div class="tile-footer">
                 <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
               </div>
             </form>
           </div>

         </div>
       </div>

    </div>
</main>
@endsection
