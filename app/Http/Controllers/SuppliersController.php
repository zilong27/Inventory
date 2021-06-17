<?php

namespace App\Http\Controllers;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index()
    {


    $suppliers = Suppliers::all();
    return view('suppliers.index',[
               'suppliers' => $suppliers
        
        ]);


    }
    public function create()
    {
        return view('suppliers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'suppliers' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email',
           
           
        
            
        ]);

        Suppliers::create([
            'suppliers' => $request->input('suppliers'),
            'contact_number' => $request->input('contact_number'),
            'email' => $request->input('email'),
            'user_id' => auth()->user()->id 
           
            
            

        ]);
    
        return redirect()->route('suppliers.index')
               ->with('success', '  Created !.');
            
            
    }
  
}
