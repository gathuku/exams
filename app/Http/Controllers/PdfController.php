<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Auth;
use App\Year;
use App\Registerunit;
use Carbon\Carbon;
use DB;
class PdfController extends Controller
{

    public function generateTranscript(){
      $marks=Registerunit::where('regno',Auth::user()->regno)->get();
      //load transcript view
      $pdf=PDF::loadview('pdf.transcriptPdf');
      return $pdf->download('transcriptPdf.pdf');
    }

    public function transcript()
    {
      $years=Year::all();
      $level=0;
      $marks=DB::table('registerunits')
                ->join('units', 'registerunits.unit_id','=','units.id')
                ->where('units.level',$level)
                ->where('regno',Auth::user()->regno)
                ->get();
      return view('pdf.transcript',compact('years','marks','level'));
    }

    public function viewTanscript(Request $request)
    {
      $level=$request->input('year');
      $marks=DB::table('registerunits')
                ->join('units', 'registerunits.unit_id','=','units.id')
                ->where('units.level',$level)
                ->where('regno',Auth::user()->regno)
                ->get();


      return view('pdf.transcript',compact('years','marks','level'));


    }
}
