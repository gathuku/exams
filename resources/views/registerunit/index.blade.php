@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i>Register Units</h1>

       </div>

     </div>

     @include('partials.error')
     @include('partials.success')
     @include('flash::message')

     <div class="tile">
       <div class="tile-body">
         <table class="table table-hover " id="sampleTable">
           <thead>
             <tr>

               <strong>Registered Units</strong>
             </tr>
             <tr>
               <th>
                 #
               </th>
               <th>Code</th>
               <th>Unit name</th>
               <th>hours</th>


             </tr>
           </thead>
           <tbody>

            @foreach($registeredUnits as $registered)
            @foreach($registered as $unit)

             <tr>
               <td>
                #
               </td>
               <td>{{$unit->code}}</td>
               <td>{{$unit->name}}</td>
               <td>{{$unit->hours}}</td>

             </tr>
              @endforeach
             @endforeach

           </tbody>
         </table>
       </div>

     </div>
     <div class="row">
       <div class="col-md-12">
         <div class="">
           <button id="register_unit" class="btn btn-primary" type="button" name="button">Register Selected</button>

         </div>
         <br>
         <div class="tile">
           <div class="tile-body">
             <table class="table table-hover " id="sampleTable">
               <thead>
                 <tr>

                   <strong>YEAR 1</strong>
                 </tr>
                 <tr>
                   <th>
                     #
                   </th>
                   <th>Code</th>
                   <th>Unit name</th>
                   <th>hours</th>


                 </tr>
               </thead>
               <tbody>

                @foreach($units as $unit)
                @if($unit->level == '1st year')
                 <tr>
                   <td>
                    <input id="check" class="form-control" type="checkbox" name="check" value="{{$unit->id}}">
                   </td>
                   <td>{{$unit->code}}</td>
                   <td>{{$unit->name}}</td>
                   <td>{{$unit->hours}}</td>

                 </tr>
                 @endif
                 @endforeach

               </tbody>
             </table>
           </div>


           <div class="tile-body">
             <table class="table table-hover " id="sampleTable">
               <thead>
                 <tr>

                   <strong>YEAR 2</strong>
                 </tr>
                 <tr>
                   <th>
                     #
                   </th>
                   <th>Code</th>
                   <th>Unit name</th>
                   <th>hours</th>


                 </tr>
               </thead>
               <tbody>

                @foreach($units as $unit)
                @if($unit->level == '2nd year')
                 <tr>
                   <td>
                    <input id="check" class="form-control" type="checkbox" name="check" value="{{$unit->id}}">
                   </td>
                   <td>{{$unit->code}}</td>
                   <td>{{$unit->name}}</td>
                   <td>{{$unit->hours}}</td>

                 </tr>
                 @endif
                 @endforeach

               </tbody>
             </table>
           </div>


         </div>
       </div>
     </div>
   </main>


   @endsection
