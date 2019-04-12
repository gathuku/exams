@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i>Session Report</h1>

       </div>

     </div>

     @include('partials.error')
     @include('partials.success')
     @include('flash::message')

     <div class="row">
       <div class="col-md-12">
         <div class="tile">
           <h4>Reported Semesters</h4>
           <div class="tile-body">
             <table class="table table-hover " >
               <thead>
                 <tr>
                   <th>#</th>
                   <th>Name</th>
                   <th>Year</th>
                   <th>Semester</th>
                   <th>Is Current</th>
                   <th>Action</th>

                 </tr>
               </thead>
               <tbody>

                @foreach($sessions as $session)
                 <tr>
                   <td>#</td>
                   <td>{{$session->name}}</td>
                   <td>{{$session->year->name}}</td>
                   <td>{{$session->semester->name}}</td>
                   <td>

                     @if($session->status ==0)
                     <span class="badge badge-warning">Expired</span>
                     @else
                     <span class="badge badge-success">Active</span>
                    </td>
                    @endif

                   <td>

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
