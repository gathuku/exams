<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Auth;
class PdfController extends Controller
{

    public function generateTranscript(){

      //load transcript view
      $pdf=PDF::loadview('pdf.transcript');
      return $pdf->download('transcript.pdf');
    }

    public function pdf()
    {
    

      return view('pdf.transcript',compact('users'));
    }
}
