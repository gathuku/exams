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
                 ID
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
                {{$unit->id}}
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
         <form class="" action="{{route('unit-register')}}" method="post">

         <div class="tile">
           @if(auth()->user()->in_session == true)
           <div class="tile-body">
             <h4>Current Semester Units</h4>
             <table class="table table-hover">
               <thead>
                 <tr>
                   <th>
                     Select
                   </th>
                   <th>Code</th>
                   <th>Unit name</th>
                   <th>hours</th>
                 </tr>
               </thead>
               <tbody>

               @foreach($currentUnits as $unit)

                <tr>
                  <td>
                   <input id="check" class="form-control" type="checkbox" name="{{$unit->id}}" value="{{$unit->id}}">
                  </td>
                  <td>{{$unit->code}}</td>
                  <td>{{$unit->name}}</td>
                  <td>{{$unit->hours}}</td>

                </tr>

                @endforeach
               </tbody>
             </table>
           </div>
           @else
           <h4 class="text-danger">Kindly Report for a session first</h4>
           @endif
         </div>

         <div class="">
           <button id="register_unit" class="btn btn-primary" type="submit" name="button">Register Selected</button>

         </div>
          </form>
         <br>
         <div class="tile">
           <div class="tile-body">
             <table class="table table-hover " id="sampleTable">
               <thead>
                 <tr>

                   <strong class="text-primary">YEAR 1</strong>
                 </tr>
                 <tr>
                   <th>
                     ID
                   </th>
                   <th>Code</th>
                   <th>Unit name</th>
                   <th>hours</th>


                 </tr>
               </thead>
               <tbody>

                @foreach($units as $unit)
                @if($unit->level == 0)
                 <tr>
                   <td>
                    {{$unit->id}}
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

                   <strong class="text-primary">YEAR 2</strong>
                 </tr>
                 <tr>
                   <th>
                     ID
                   </th>
                   <th>Code</th>
                   <th>Unit name</th>
                   <th>hours</th>


                 </tr>
               </thead>
               <tbody>

                @foreach($units as $unit)
                @if($unit->level == 1)
                 <tr>
                   <td>
                  {{$unit->id}}
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

                   <strong class="text-primary">YEAR 3</strong>
                 </tr>
                 <tr>
                   <th>
                     ID
                   </th>
                   <th>Code</th>
                   <th>Unit name</th>
                   <th>hours</th>


                 </tr>
               </thead>
               <tbody>

                @foreach($units as $unit)
                @if($unit->level == 2)
                 <tr>
                   <td>
                   {{$unit->id}}
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

                   <strong class="text-primary">YEAR 4</strong>
                 </tr>
                 <tr>
                   <th>
                     ID
                   </th>
                   <th>Code</th>
                   <th>Unit name</th>
                   <th>hours</th>


                 </tr>
               </thead>
               <tbody>

                @foreach($units as $unit)
                @if($unit->level == 3)
                 <tr>
                   <td>
                  {{$unit->id}}
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
   {{--
  @section('scripts')
  <!--Register units javascript -->

      <script type="text/javascript">

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      document.getElementById('register_unit').addEventListener('click', function(){

      const selected =[];

      $(document).ready(function() {

        $("input:checkbox[name=check]:checked").each(function() {
             selected.push($(this).val());
        });


        $.ajax({
        type: "POST",
        url: '/unit/register',
        data:{selected},
        cache: false,
        success: function(data){
            //alert(data);
        }
        });



      });
      });




      </script>


  @endsection
  --}}

   @endsection
