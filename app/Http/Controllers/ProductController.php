<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Settings;
use Illuminate\Http\Request;


use Response;


class ProductController extends Controller
{
  
    public function index()
    {
        $settings = Settings::all();
        $products = Product::paginate(4);

        return view('products.index',[
                   'products' => $products,
                   'settings'=> $settings
            
            ]);
           
    }

   
    public function create(Request $request)
    { 
        $settings = Settings::all(); 
        return view('products.create',[
                 'products' => $settings
    
    
             ]);
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'model' =>'required',
        
            
        ]);

        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'model' => $request->input('model'),
            'user_id' => auth()->user()->id 

        ]);
    
        return redirect()->route('products.index')
            ->with('success', ' New Item successfully Created !.');
    }

  
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

 
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Item  successfully updated!!');
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Item successfully deleted!');
    }
}
