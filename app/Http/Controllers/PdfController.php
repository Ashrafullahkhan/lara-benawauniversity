<?php

namespace App\Http\Controllers;

class PdfController extends Controller
{

    public function index($pdf)
    {

        // return Response::make(file_get_contents('policies/' . $pdf), 200, [
        //     'content-type' => 'application/pdf',
        // ]);

    }
}
