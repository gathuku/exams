@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i>Semester</h1>

       </div>
       <ul class="app-breadcrumb breadcrumb side">
         <a href="{{route('semester.create')}}"> <button class="btn btn-primary" type="button" name="button">New</button></a>

       </ul>
     </div>

     @include('partials.error')
     @include('partials.success')
     @include('flash::message')

     <div class="row">
       <div class="col-md-12">
         <div class="tile">
           <div class="tile-body">
             <table class="table table-hover " id="sampleTable">
               <thead>
                 <tr>
                   <th>#</th>
                   <th>Name</th>
                   <th>Year</th>
                   <th>Exam Start</th>
                   <th>Is Current</th>
                   <th>Action</th>

                 </tr>
               </thead>
               <tbody>

                @foreach($semester as $semester)
                 <tr>
                   <td>#</td>
                   <td>{{$semester->name}}</td>
                   <td>{{$semester->year->name}}</td>
                   <td>{{$semester->exam_date}}</td>
                   <td>

                     @if($semester->current ==0)
                     <span class="badge badge-warning">False</span>
                     @else
                     <span class="badge badge-success">True</span>
                    </td>
                    @endif

                   <td>
                   <a href="/semester/{{$semester->id}}/edit"><button class="btn btn-default" data_toggle="tooltip" text="Edit student"><i class="fa fa-pencil-square-o"></button></i></a>
                  
                    <form class="" action="/semester/{{$semester->id}}" method="post">
                      <button class="btn btn-default" type="submit"><i class="fa fa-trash"></button></i>
                        {!! method_field('delete') !!}
                         @csrf
                    </form>



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
