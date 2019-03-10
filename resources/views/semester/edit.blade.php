@extends('layouts.main')
@section('content')

<main class="app-content">
  <div class="app-title">
      <div>

        <h3>Edit Semester</h3>
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
           <h3 class="tile-title">Edit the Details</h3>
           <div class="tile-body col-md-6">
             <form method="post" action="/semester/{{$semester->id}}">
               @csrf
               <input type="hidden" name="_method" value="put">
               <div class="form-group">
                 <label class="control-label">Semester Name</label>
                 <input  name="name" class="form-control" type="text" value="{{$semester->name}}">
               </div>



               <div class="form-group">
                 <label class="control-label">Year</label>
                <select class="form-control" name="year">
                  <option value="">-- select --</option>
                  @foreach($years as $year)
                  <option value="{{$year->id}}">{{$year->name}}</option>

                  @endforeach
                </select>
               </div>

               <div class="form-group">
                 <label class="control-label">Exam start date</label>
                 <input name="examDate" class="form-control" type="text" value="{{$semester->exam_date}}">
               </div>



               <div class="form-group">
                 <div class="form-check">
                   <label class="form-check-label">
                     <input name="current" class="form-check-input" type="checkbox">Is Current
                   </label>
                 </div>
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
