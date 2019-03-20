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
                   <th>mark</th>
                   <th>Grade</th>


                 </tr>
               </thead>
               <tbody>

                @foreach($registeredUnit as $value)


                 <tr>
                   <td>#</td>
                   <td>{{$value->regno}}</td>
                   <td>{{$value->unit->name}}</td>
                   <td>


                   </td>
                   <td>{{$value->grade}}</td>


                 </tr>


                 @endforeach

               </tbody>
             </table>
            
           </div>
         </div>
       </div>
     </div>
   </main>
   {{--
   <script type="text/javascript">
     var input=document.querySelectorAll('.mark_input');
     const marks=[];

     for(var i=0;i<input.length;i++){
            console.log(input[i].id)

            });
     }


   </script>
   --}}
   @endsection
