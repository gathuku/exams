<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

 <div class=" border border-success">
   <div class="container">


   <div class="row justify-content-centre">
     <div class="col-md-4 col-sm-4">
      {!! QrCode::size(200)->generate('moses')!!}
     </div>
     <div class="col-md-4 col-sm-4 ">
       <h3 class="text-success">Kisii University</h3>
       <p>P. O. Box 408 - 40200 KISII – KENYA, Kenya</p>
       <p>+254-058-30826</p>
       <p>E-mail:- info@kisiiuniversity.ac.ke ~ Web: http://www.kisiiuniversity.ac.ke/</p>
       <h6>PROVISIONAL UNDERGRADUATE TRANSCRIPT</h6>
     </div>
     <div class="col-md-3 col-sm-3">
     <img src="{{asset('/assets/images/kisii.jpeg')}}" alt="">
     </div>

   </div>

   <div class="col-md-11">
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

      <td>
        @switch($level)
        @case(0)
        Year 1
        @break
        @case(1)
        Year 2
        @break
        @case(2)
        Year 3
        @break
        @case(3)
        Year 4
        @break
        @default
        Not set
        @endswitch
      </td>
      <td></td>
      <td><strong>Date of Admission</strong> </td>
      <td>{{auth()->user()->created_at}}</td>
     </tr>

     </table>
   </div>


   <br>
   <div class="col-md-11">
     <table class="table table-reponsive">
       <thead>
         <th>CODE</th>
         <td>UNIT TITLE</td>
         <td>HOURS</td>
         <td>GRADE</td>
       </thead>
       <tbody>

         @foreach($marks as $mark)
         <tr>
           <td> {{$mark->code}}</td>
           <td>{{$mark->name}}</td>
           <td>{{$mark->hours}}</td>
           <td>{{$mark->grade}}</td>
         </tr>
         @endforeach

       </tbody>
     </table>
   </div>

    <br>
    <div class="col-md-6">
      <p><b>Key to Grading</b></p>
      <table class="table">
        <tbody>
          <tr>
          <td><b>Range</b></td>
          <td>70 - 100</td>
          <td>60 - 70</td>
          <td>50 - 60</td>
          <td>40 - 50</td>
          <td>0 - 40</td>
          </tr>
          <tr>
            <td><b>Points</b></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>F</td>
          </tr>
        </tbody>

      </table>
    </div>
    <br>
    <div class="col-md-8">
      <p><b>Other Keys</b></p>
      <table class="table">
        <tbody>
          <tr>
          <td><b>Name</b></td>
          <td>Retake</td>
          <td>Missing Marks</td>
          <td>Audited unit</td>
          <td>Credit Transfer</td>
          <td>Incomplete</td>
          <td>Pass</td>
          <td>Supplementary</td>
          </tr>
          <tr>
            <td><b>Points</b></td>
            <td>*</td>
            <td>-</td>
            <td>Au</td>
            <td>CT</td>
            <td>I</td>
            <td>P</td>
            <td>SUP</td>
          </tr>
        </tbody>

      </table>
    </div>

 </div>
