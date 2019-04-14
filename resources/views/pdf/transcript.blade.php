
  @extends('layouts.main')
  @section('content')
 <main class="app-content">
   <div class="app-title">
     <div>
       <h1><i class="fa fa-th-list"></i> Transcipts</h1>

     </div>
     <ul class="app-breadcrumb breadcrumb side">
       <form id="year_form" class="" action="{{route('view-transcript')}}" method="post">
         @csrf
         <div class="form-group">
           <select id="year_select" class="form-control" name="year">
             <label for=""> Select Year</label>
             <option value="">-- select --</option>
             <option value="0">1st Year</option>
             <option value="1">2nd Year</option>
             <option value="2">3rd Year</option>
             <option value="3">4th Year</option>
           </select>
         </div>

       </form>
     </ul>

   </div>
   <div class="tile">
     <div class="container">

         <div class="col-md-6">


         </div>


     </div>

    @include('pdf.transcriptPdf')

     </div>
   </div>

 </main>
 <script type="text/javascript">

   var select_input=document.getElementById('year_select');
   var year_form =document.getElementById('year_form');
   console.log(year_form)
   select_input.onchange=function(){
     year_form.submit();
   }
 </script>

  @endsection
