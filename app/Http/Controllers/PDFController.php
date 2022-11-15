<?php

namespace App\Http\Controllers;

use PDF;
class PDFController extends Controller
{
    
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = Pdf::loadView('myPDF', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    }

}
