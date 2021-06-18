@if(Auth::user())
@extends('layouts.app')
@include('products.sidebar')
                              
                           </div>
                           <div class="main_content">
                               <div class="#" >
                                 
                              

                              </div> 
                               
                               <div class="info">
                              </body>
                              </html>
                            </div>
                       <body>
                          @section('content')
                          
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                 <div class="card">
                           <div class="row">
                               <div class="col-lg-10 margin-tb">
                                   <div class="pull-right">
                                       <nav class="navbar navbar bg-light">
                                           <form class="form-inline">
                                             <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search">
                                             <button class="btn btn-outline-success my-3 my-sm-0" type="submit">Search</button>
                                           </form>
                                         </nav>
                                        </div>
                               </div>
                               
                                   <div class="pull-right">
                                       <a class="btn btn-success" href="{{ route('products.create') }}"> Add Item  <i class="fas fa-plus-circle"></i>
                                           </a>
                                           
                                   </div>
                               </div>
                              @endif
                                   
                           @if ($message = Session::get('success'))
                           <div class="alert alert-success">
                              <p>{{ $message }}</p>
                           </div>
                        @endif
                        
                                 <div>
                                  <table class="table table-striped table-bordered table-sm">
                                       <table class="table table-hover table-striped">
                                           <thead>
                                           <tr>
                                               
                                               <th>Item</th>
                                               <th>description</th>
                                               <th>suplier</th>
                                               <th>Model</th>
                                               <th>Location</th>
                                               <th>quantity</th>
                                               <th>price</th>
                                               <th>Actions</th>
                                           </tr>
                                          
                                           </thead>
                                       
                                           @foreach ($products as $product)
                                           @if(isset(Auth::user()->id) && Auth::user()->id == $product->user_id)
                         <tr>
                            
                            <td>{{$product->name }}</td>
                            <td>{{$product->description }}</td>
                            <td>{{ $product->suppliers }}</td>
                            <td>{{ $product->models }}</td>
                            <td>{{ $product->locations }}</td>
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
                      
                      
                      @endif
                      @endforeach
                    </table>
                  </table>    
                  <div class="pull-right">
                   {{ $products->links() }}
                </div>
             </div>
           </div>                                            
        </div>
      </div>
   </div>
 </div>
                    
                   
  @endsection 