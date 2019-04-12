@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i> Session Report</h1>

       </div>

     </div>

     @include('partials.error')
     @include('partials.success')
     @include('flash::message')

     <div class="row">
       <div class="col-md-12">
         <div class="tile">
           <div class="tile-body">
          
             <h3 class="text-success">Year: {{$currentYear}}</h3>
             <form class="" action="#" method="post">
               <div class="form-group col-md-5">
                 <label for="">Select a Semester</label>
                 <select class="form-control" name="">
                   @foreach($semesters as $semester)
                   <option value="{{$semester->id}}">{{$semester->name}}</option>
                   @endforeach

                 </select>

               </div>
               <div class="form-group">
                 <input class="btn btn-success" type="submit" name="" value="Report">
               </div>
             </form>

           </div>
           <h4>Reported Semesters</h4>
           <div class="tile-body">
             <table class="table table-hover " >
               <thead>
                 <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Year</th>
                   <th>Semester</th>
                   <th>Is Current</th>


                 </tr>
               </thead>
               <tbody>

                @foreach($sessions as $session)
                 <tr>
                   <td>{{$session->id}}</td>
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
