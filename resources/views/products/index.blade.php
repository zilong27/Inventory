@extends('products.app')

@section('content')
@include('products.sidebar')
<h2>Inventory System</h2>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <nav class="navbar navbar bg-light">
                    <form class="form-inline">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-3 my-sm-0" type="submit">Search</button>
                    </form>
                  </nav>
            </div>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Add Item  <i class="fas fa-plus-circle"></i>
                    </a>
                    
            </div>
        </div>
    </div>
    


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
       <p>{{ $message }}</p>
    </div>
 @endif
 <div class="table-responsive table-full-width">
	<table class="table table-hover table-striped">
        <thead>
        <tr>
            
            <th>Item</th>
            <th>description</th>
            <th>suplier</th>
            <th>quantity</th>
            <th>price</th>
            <th>Actions</th>
        </tr>
       
        </thead>
      
        @foreach ($products as $product)
        
    
            <tr>
              
                <td>{{$product->name }}</td>
                <td>{{$product->description }}</td>
                <td></td>
                <td>{{ $product->quantity }}</td>
                <td>{{$product->price }}</td>
                
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a href="{{ route('products.edit',$product->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
          
       
       
        @endforeach
    </table>


            </div>
        </div>
    </div>
</div>
   
    @yield('content')

@endsection