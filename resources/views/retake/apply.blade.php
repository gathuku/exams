@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i>Retake Application</h1>

       </div>

     </div>

     @include('partials.error')
     @include('partials.success')
     @include('flash::message')


     <div class="row">
       <div class="col-md-12">
         <div class="tile">
           <div class="tile-body">
             <h4 class="text-success">Payment with Mpesa</h4>
             <div class="row">
               <div class="col-md-5">
                 <a href="{{route('pay-retakes')}}">
                   <button class="btn btn-success" type="button" name="button">Mpesa Express</button>
                 </a>

               </div>
               <div class="col-md-5">
                 <h4>Image</h4>
               </div>

             </div>



           </div>
         </div>
       </div>
     </div>
   </main>

   @endsection
