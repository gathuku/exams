<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Auth;
use App\Year;
use App\Registerunit;
class PdfController extends Controller
{

    public function generateTranscript(){

      //load transcript view
      $pdf=PDF::loadview('pdf.transcript');
      return $pdf->download('transcript.pdf');
    }

    public function transcript()
    {
      $years=Year::all();
      $marks=Registerunit::where('regno',Auth::user()->regno)->get();
      return view('pdf.transcript',compact('years','marks'));
    }

    public function viewTanscript(Request $request)
    {

    }
}
