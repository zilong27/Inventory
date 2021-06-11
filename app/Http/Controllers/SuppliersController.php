<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index()
    {


    $settings = Settings::all();
    return view('suppliers',[
               'suppliers' => $settings
        
        ]);


    }
   
  
}
