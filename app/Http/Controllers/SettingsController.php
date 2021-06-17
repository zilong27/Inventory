<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use Illuminate\Http\Request;


class SettingsController extends Controller
{


        public function index()
    {
       
        $settings = Settings::all();
        return view('models.index',[
                   'models' => $settings
            
            ]);
           
           
    }

   
    public function create()
    {
        return view('models.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'model_number' => 'required',
           
           
        
            
        ]);

        Settings::create([
            'model' => $request->input('model'),
            'model_number' => $request->input('model_number'),
            'user_id' => auth()->user()->id 
           
            
            

        ]);
    
        return redirect()->route('models.index')
               ->with('success', '  Created !.');
            
            
    }
    public function show(Settings $settings)
    {
        return view('settings.show',compact('settings'));
    }
    public function destroy(Settings $model)
    {
        $model->delete();

        return redirect()->route('models.index')
            ->with('success', ' successfully deleted!');
    }

    
    

}
