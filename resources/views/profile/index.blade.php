@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="row user">

       <div class="col-md-3">
         <div class="tile p-0">
           <ul class="nav flex-column nav-tabs user-tabs">
             <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">User Profile</a></li>
             <li class="nav-item"><a class="nav-link" href="#two_factor" data-toggle="tab">Two Factor Auth</a></li>
           </ul>
         </div>
       </div>
       <div class="col-md-9">
         <div class="tab-content">
           <div class="tab-pane active" id="user-timeline">
               <div class="tile user-settings">
                 <h4 class="line-head">Settings</h4>

                 <form>
                   <div class="row mb-8">
                     <div class="col-md-8">
                       <label>First Name</label>
                       <input value="{{$user->name}}" class="form-control" type="text">
                     </div>

                   </div>
                   <div class="row">
                     <div class="col-md-8 mb-4">
                       <label>Email</label>
                       <input value="{{$user->email}}"class="form-control" type="text">
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-md-8 mb-4">
                       <label>Mobile No</label>
                       <input value="{{$user->phone}}" class="form-control" type="text">
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-md-8 mb-4">
                       <label>Office Phone</label>
                       <input class="form-control" type="text">
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-md-8 mb-4">
                       <label>Home Phone</label>
                       <input class="form-control" type="text">
                     </div>
                   </div>
                   <div class="row mb-10">
                     <div class="col-md-12">
                       <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                     </div>
                   </div>
                 </form>
               </div>
           </div>


           <div class="tab-pane" id="two_factor">
             <div class="tile ">
               <h5>Two Factor Authentication</h5>
               <button class="btn btn-primary" type="button" name="button">Enable</button>
             </div>

           </div>

         </div>
       </div>
     </div>
   </main>
@endsection
