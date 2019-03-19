
  @extends('layouts.main')
  @section('content')
 <main class="app-content">
   <div class="tile">
     <div class="container">

         <div class="form-group col-md-6">
           <h3>Transcript</h3>

           <form id="year_form" class="" action="{{route('view-transcript')}}" method="post">
             @csrf
             <select id="year_select" class="form-control" name="year">
               <label for=""> Year</label>
               <option value="">-- select --</option>

               @foreach($years as $year)
                <option value="">{{$year->name}}</option>
               @endforeach
             </select>
           </form>

           <br>
           <button class="btn btn-success" type="button" name="button">Print PDF</button>

         </div>


     </div>


        <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
         integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        </head>

         <div class=" border border-success">
           <div class="row">
             <div class="col-md-4 col-sm-4">
              {!! QrCode::size(200)->generate('moses')!!}
             </div>
             <div class="col-md-4 col-sm-4 align-center">
               <h3 class="text-success">Kisii University</h3>
               <p>P. O. Box 408 - 40200 KISII – KENYA, Kenya</p>
               <p>+254-058-30826</p>
               <p>E-mail:- info@kisiiuniversity.ac.ke ~ Web: http://www.kisiiuniversity.ac.ke/</p>
               <h6>PROVISIONAL UNDERGRADUATE TRANSCRIPT</h6>
             </div>
             <div class="col-md-4 col-sm-4">

             </div>

           </div>

           <table class="table">
             <thead>
               <th></th>
               <th></th>
               <th></th>
               <th></th>
             </thead>
            <tr class="success">
            <td > <strong>Student Name</strong> </td>
            <td>{{auth()->user()->name}}<td>
            <td> <strong>Reg No</strong> </td>
            <td>{{auth()->user()->regno}}</td>
           </tr>

           <tr class="info">
             <td> <strong>Programme</strong> </td>
             <td>{{auth()->user()->program->name}}</td>
             <td></td>
             <td></td>
             <td></td>
           </tr>
           <tr class="success">
             <td><strong>Faculty</strong> </td>
             <td>{{auth()->user()->faculty->name}}</td>
              <td></td>
             <td><strong>Year</strong> </td>
             <td>2019</td>
           </tr>

           <tr class="info">
            <td><strong>Year of study</strong> </td>

            <td>2</td>
            <td></td>
            <td><strong>Date of Admission</strong> </td>
            <td>{{auth()->user()->created_at}}</td>
           </tr>

           </table>
           <br>
           <table class="table">
             <thead>
               <th>CODE</th>
               <td>UNIT TITLE</td>
               <td>HOURS</td>
               <td>GRADE</td>
             </thead>
             <tbody>
               @foreach($marks as $mark)
               <tr>
                 <td> {{$mark->unit->code}}</td>
                 <td>{{$mark->unit->name}}</td>
                 <td>{{$mark->unit->hours}}</td>
                 <td>{{$mark->grade}}</td>
               </tr>
               @endforeach
             </tbody>
           </table>

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
