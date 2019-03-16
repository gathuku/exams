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
             <div class="container">
               <div class="row">
                 <div class="form-group col-md-3">
                   <label for="">select Course</label>
                   <select class="form-control" name="">
                     <option value="">-- select --</option>
                     @foreach($courses as $course)
                       <option value="">{{$course->name}}</option>
                     @endforeach

                   </select>

                 </div>

                 <div class="form-group col-md-3">
                   <label for="">select Course</label>
                   <select class="form-control" name="">
                     <option value="">-- select --</option>
                     @foreach($courses as $course)
                       <option value="">{{$course->name}}</option>
                     @endforeach

                   </select>

                 </div>
               </div>
             </div>

            <br>
            <br>
            <form class="" action="{{route('mark.store')}}" method="post">
              @csrf
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

                   <input value="{{$value->mark}}" class="form-control col-md-3 mark_input" type="text" name="{{$value->id}}" value="">
                   </td>
                   <td>{{$value->grade}}</td>


                 </tr>


                 @endforeach

               </tbody>
             </table>
             <button class="btn btn-success" type="submit" name="button">Save</button>
              </form>
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
