<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use Illuminate\Http\Request;

class ItemModelsController extends Controller
{
    public function index()
    {
        $settings = Settings::all();
        return view('models.index',[
                   'models' => $settings
            
            ]);
    
    }
    
   



}
