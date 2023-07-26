<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function downloadPDF(Request $request)
    {
        
        // $data = [
         
        //     'name'         => 'John Doe',
        //     'address'      => 'USA',
        //     'mobileNumber' => '000000000',
        //     'email'        => 'john.doe@email.com'
        // ];
        return view('resume');
        $pdf = PDF::loadView('resume');
        return $pdf->stream('resume.pdf');
    
    }
}
