<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use Illuminate\Http\Request;


class SettingsController extends Controller
{


        public function index()
    {
       
        $settings = Settings::all();
        return view('settings.index',[
                   'settings' => $settings
            
            ]);
           
           
    }

   
    public function create()
    {
        return view('settings.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'supplier' => 'required',
            'location' => 'required',
           
        
            
        ]);

        Settings::create([
            'model' => $request->input('model'),
            'supplier' => $request->input('supplier'),
            'location' => $request->input('location')
            
            

        ]);
    
        return redirect()->route('settings.index')
            ->with('success', '  Created !.');
    }
    public function destroy(Settings $settings)
    {
        $settings->delete();

        return redirect()->route('suppliers')
            ->with('success', 'supplier successfully deleted!');
    }

    

}
