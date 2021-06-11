<?php

namespace App\Http\Controllers;
use App\Models\Model;
use App\Models\Settings;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function index()
    {
        $settings = Settings::all();
        return view('models',[
                   'models' => $settings
            
            ]);
    
    }



}
