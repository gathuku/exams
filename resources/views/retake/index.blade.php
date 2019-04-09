@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i>Retakes</h1>

       </div>

     </div>

     @include('partials.error')
     @include('partials.success')
     @include('flash::message')


     <div class="row">
       <div class="col-md-12">
         <div class="tile">
           <div class="tile-body">
             <div class="container">

             </div>

            <br>
            <br>


             <table class="table table-hover " id="sampleTable">
               <thead>
                 <tr>
                   <th>#</th>
                   <th>Regno</th>
                   <th>unit</th>
                   <th>Grade</th>
                   <td>Paid</td>
                   <th>Action</th>
                 </tr>
               </thead>
               @student

               <tbody>
                @foreach($retakesUser as $retake)
                 <tr>
                   <td>#</td>
                   <td>{{$retake->regno}}</td>
                   <td>{{$retake->unit->name}}</td>
                   <td>{{$retake->grade}}</td>
                   <td><span class="badge badge-info"></span> </td>
                   <td>
                      <a href="{{route('apply-retakes')}}">
                        <button class="btn btn-success" type="button" name="button">Apply</button>
                      </a>

                    </td>

                 </tr>

                 @endforeach
               </tbody>
               @else
               <tbody>
                @foreach($retakes as $retake)
                 <tr>
                   <td>#</td>
                   <td>{{$retake->regno}}</td>
                   <td>{{$retake->unit->name}}</td>

                   <td>{{$retake->grade}}</td>


                 </tr>

                 @endforeach
               </tbody>
               @endstudent
             </table>

           </div>
         </div>
       </div>
     </div>
   </main>

   @endsection
