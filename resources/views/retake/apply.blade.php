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

             <div class="row">
               <div class="col-md-5 text-center">

                 <form class="" action="{{route('pay-retakes')}}" method="post">
                   @csrf
                   <h4 class="text-success">Payment with Mpesa</h4>
                   <div class="form-group">

                     <label for=""> Confirm Mpesa number</label>
                     <input name="phone" class="form-control" type="text" name="" value="{{auth()->user()->phone}}">
                   </div>
                   <div class="form-group">
                     <input class="form-control btn btn-info" type="submit" name="" value="Request Payment">
                   </div>
              <input type="hidden" name="unitID" value="{{$id}}">
                 </form>


               </div>
               <div class="col-md-5">

                  <img class="border border-info" src="{{asset('/assets/images/mpesa.jpg')}}" alt="" style="height:40em">


               </div>

             </div>



           </div>
         </div>
       </div>
     </div>
   </main>

   @endsection
