@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i> Lecturers</h1>

       </div>
       <ul class="app-breadcrumb breadcrumb side">
         <a href="{{route('lecturer.create')}}"> <button class="btn btn-primary" type="button" name="button">New</button></a>

       </ul>
     </div>

     @include('partials.error')
     @include('partials.success')
     @include('flash::message')

     <div class="row">
       <div class="col-md-12">
         <div class="tile">
           <div class="tile-body">
             <table class="table table-hover " id="usersTable">
               <thead>
                 <tr>
                   <th>ID</th>
                   <th>Avatar</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>

                @foreach($lecturers as $user)
                 <tr>
                   <td>{{$user->id}}</td>
                   <td>
                     @if($user->avatar == null)
                     <div class="app-sidebar__user">
                       <img class="app-sidebar__user-avatar" src="{{$user->gravatar}}" alt="User Image">
                       <div>
                      @else
                      <div class="app-sidebar__user">
                        <img class="app-sidebar__user-avatar" src="{{$user->avatar}}" alt="User Image">
                        <div>
                      @endif
                   </td>
                   <td>{{$user->name}}</td>
                   <td>{{$user->email}}</td>
                   <td>
                   <a href="/lecturer/{{$user->id}}/edit"><button class="btn btn-primary" data_toggle="tooltip" text="Edit student"><i class="fa fa-pencil-square-o"></button></i></a>

                   </td>
                 </tr>
                 @endforeach

               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </main>
   @section('scripts')
   <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
   <script type="text/javascript">$('#usersTable').DataTable();</script>
   @endsection
   @endsection
