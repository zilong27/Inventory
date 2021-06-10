<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function index()
    {
       
        return view('settings.model');
    }

   
    public function create()
    {
        return view('models.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'models' => 'required',
            'item_name' => 'required',
           
        
            
        ]);

        Product::create([
            'models' => $request->input('models'),
            'item_name' => $request->input('item_name')
        
        ]);
    
        return redirect()->route('settings.model')
            ->with('success', 'Created !.');
    }
}
