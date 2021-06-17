<?php

namespace App\Http\Controllers;
use App\Models\Locations;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Locations::all();
        return view('locations.index',[
                   'locations' => $locations
            
            ]);
    
    }
    public function create()
    {
        return view('locations.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'locations' => 'required',
            'company_name' => 'required',
           
           
        
            
        ]);

        Locations::create([
            'locations' => $request->input('locations'),
            'company_name' => $request->input('company_name'),
            'user_id' => auth()->user()->id 
           
            
            

        ]);
    
        return redirect()->route('locations.index')
               ->with('success', '  Created !.');
            
            
    }
}
