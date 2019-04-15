@extends('layouts.main')
@section('content')
<main class="app-content">
     <div class="app-title">
       <div>
         <h1><i class="fa fa-th-list"></i> Payments</h1>

       </div>

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
                   <td>Paid For</td>
                   <th>Amount</th>
                   <th>Receipt Number</th>
                   <th>Phone</th>

                 </tr>
               </thead>
               <tbody>

                @foreach($payments as $payment)
                 <tr>
                   <td>{{$payment->id}}</td>
                    <td>{{$payment->paid_for}}</td>
                   <td>{{$payment->amount}}</td>
                   <td>{{$payment->receipt_number}}</td>
                   <td>{{$payment->phone}}</td>
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
