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

            <br>
            <br>
            <form class="" action="{{route('mark.store')}}" method="post">
              @csrf
             <table class="table table-hover " id="marksTable">
               <thead>
                 <tr>
                   <th>ID</th>
                   <th>Regno</th>
                   <th>unit</th>
                   <th>Mark</th>
                   <th>Grade</th>


                 </tr>
               </thead>
               <tbody>

                @foreach($registeredUnit as $value)


                 <tr>
                   <td>{{$value->id}}</td>
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
   @section('scripts')
   <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
   <script type="text/javascript">$('#marksTable').DataTable();</script>
   @endsection

   @endsection
