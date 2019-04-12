@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i>Units</h1>

       </div>
       <ul class="app-breadcrumb breadcrumb side">
         <a href="{{route('unit.create')}}"> <button class="btn btn-primary" type="button" name="button">New</button></a>

       </ul>
     </div>

     @include('partials.error')
     @include('partials.success')
     @include('flash::message')

     <div class="row">
       <div class="col-md-12">
         <div class="tile">
           <div class="tile-body">
             <h5>Filter with Course</h5>
             <form id="cource_select_form" class="" action="{{route('unit-change')}}" method="post">
                  @csrf
               <div class="form-group col-md-5">
                 <label for="">Couse</label>
                 <select class="form-control" name="course" id="course_select">
                  <option value="">-- select --</option>
                   @foreach($courses as $course)
                   <option value="{{$course->id}}">{{$course->name}}</option>
                   @endforeach

                 </select>
               </div>
             </form>

           </div>

         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-12">
         <div class="tile">
           <div class="tile-body">
             <table class="table table-hover " id="sampleTable">
               <thead>
                 <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>code</th>
                   <th>hours</th>

                   <th>Action</th>

                 </tr>
               </thead>
               <tbody>
               <p class="bg-info">Year 1</p>
                @foreach($units as $unit)

                 <tr>
                   <td>{{$unit->id}}</td>
                   <td>{{$unit->name}}</td>
                   <td>{{$unit->code}}</td>
                   <td>{{$unit->hours}}</td>

                   <td>
                   <a href="/unit/{{$unit->id}}/edit"><button class="btn btn-primary" data_toggle="tooltip" text="Edit student"><i class="fa fa-pencil-square-o"></button></i></a>
                   <a href="#"><button class="btn btn-info"><i class="fa fa-eye"></button></i></a>

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

   <script type="text/javascript">
    var select_form =document.getElementById('cource_select_form');
    var select_box=document.getElementById('course_select');
    select_box.onchange= function(){
      select_form.submit();

    }
   </script>

   @endsection
