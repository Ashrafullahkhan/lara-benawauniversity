<?php

namespace App\Http\Controllers;
use File;
use Response;
use Illuminate\Http\Request;

class PdfController extends Controller
{
   public function index(){
        
         return Response::make(file_get_contents('polices/Ethics_in_Research_Policy.pdf'), 200, [
                        'content-type'=>'application/pdf',
                    ]);
    }
}
