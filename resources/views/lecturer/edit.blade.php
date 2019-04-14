@extends('layouts.main')
@section('content')

<main class="app-content">
  <div class="app-title">
      <div>

        <p>Edit lecturer</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <a href=/lecturer>
          <button class="btn btn-primary" type="button" name="button">Back</button>
        </a>

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
             @foreach($lecturer as $lecturer)
             @endforeach
             <form method="post" action="/lecturer/{{$lecturer->id}}/update">
               @csrf
               <input type="hidden" name="_method()" value="PUT">
               <div class="form-group">
                 <label class="control-label">Name</label>
                 <input value="{{$lecturer->name}}" name="name" class="form-control" type="text" placeholder="Enter full name">
               </div>

               <div class="form-group">
                 <label class="control-label">Email</label>
                 <input value="{{$lecturer->email}}"  name="email" class="form-control" type="email" placeholder="Enter email address">
               </div>

               <div class="form-group">
                 <label class="control-label">Faculty</label>
                <select class="form-control" name="faculty">
                  <option value="">-- select --</option>
                  @foreach($faculties as $faculty)
                  <option value="{{$faculty->id}}">{{$faculty->name}}</option>

                  @endforeach
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
