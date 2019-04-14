@extends('layouts.main')
@section('content')
<main class="app-content">
   <div class="app-title">
     <div>
       <h1><i class="fa fa-archive"></i> Dashboard</h1>

     </div>

   </div>
   <div class="row">
     @admin
     <div class="col-md-3">
       <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
         <div class="info">
           <h4>Students</h4>
           <p><b>{{$user}}</b></p>
         </div>
       </div>
     </div>
    @endadmin
     <div class="col-md-3">
       <div class="widget-small info"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
         <div class="info">
           <h4>Faculty</h4>
           <p><b>{{$faculty}}</b></p>
         </div>
       </div>
     </div>
     <div class="col-md-3">
       <div class="widget-small warning"><i class="icon fa fa-files-o fa-3x"></i>
         <div class="info">
           <h4>Units</h4>
           <p><b>{{$unit}}</b></p>
         </div>
       </div>
     </div>
     <div class="col-md-3">
       <div class="widget-small danger"><i class="icon fa fa-star fa-3x"></i>
         <div class="info">
           <h4>Exams</h4>
           <p><b>{{$exam}}</b></p>
         </div>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-md-3">
       <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
         <div class="info">
           <h4>Lectures</h4>
           <p><b>5</b></p>
         </div>
       </div>
     </div>
     <div class="col-md-3">
       <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
         <div class="info">
           <h4>Registered Units</h4>
           <p><b>{{$registered}}</b></p>
         </div>
       </div>
     </div>
     <div class="col-md-3">
       <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
         <div class="info">
           @admin
           <h4>Total Retakes</h4>
           <p><b>{{$retakesadmin}}</b></p>
           @endadmin
          @student
          <h4>Your Retakes</h4>
          <p><b>{{$retakes}}</b></p>
          @endstudent
         </div>
       </div>
     </div>
     @admin
     <div class="col-md-3">
       <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
         <div class="info">
           <h4>Transcipt Download</h4>
           <p><b>500</b></p>
         </div>
       </div>
     </div>
     @endadmin
   </div>


 </main>
@endsection
