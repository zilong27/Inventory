<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $settings = Settings::all();
        return view('location',[
                   'location' => $settings
            
            ]);
    
    }
}
