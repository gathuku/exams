@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i>Marks Entry</h1>

       </div>
  
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
                   <th>type</th>
                   <th>Start date</th>
                   <th>End date</th>
                   <th>Status</th>
                   <th>Action</th>

                 </tr>
               </thead>
               <tbody>

                @foreach($exams as $exam)
                 <tr>
                   <td>#</td>
                   <td>{{$exam->name}}</td>
                   <td>{{$exam->type}}</td>
                   <td>{{$exam->start_date}}</td>
                   <td>{{$exam->end_date}}</td>
                   <td>

                     @if($exam->status ==0)
                     <span class="badge badge-warning">Done</span>
                     @else
                     <span class="badge badge-success">Not Done</span>
                    </td>
                    @endif

                   <td>
                   <a href="/exam/{{$exam->id}}/edit"><button class="btn btn-primary" data_toggle="tooltip" text="Edit student"><i class="fa fa-pencil-square-o"></button></i></a>
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

   @endsection
