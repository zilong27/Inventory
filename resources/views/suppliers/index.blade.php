@include('products.sidebar')
          
       </div>
       <div class="main_content">
           <div class="#"></div>  
           <div class="info">
@extends('layouts.app')
@section('content')
<div id="content">
    <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-9">
            <div class="card">
                <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Suppliers List</h2>
            </div>
            @if(Auth::user())
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('suppliers.create') }}"> Add Model  <i class="fas fa-plus-circle"></i>
                    </a>    
                    
            </div>
        </div>
        @endif
        </div>
    </div>
    <table class="table table-striped table-bordered table-sm">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                
                <th></th>
                <th width="5%">Suppliers</th>
                <th>Contact Number</th>
                <th>Email Address</th>
                <th>Actions</th>
               
            </tr>
           </thead>
           @foreach ($suppliers  as $suppliers )
           @if(isset(Auth::user()->id) && Auth::user()->id == $suppliers->user_id)
           <tr>
                           
               <td></td>
               <td>{{ $suppliers->suppliers }}</td>
               <td>{{ $suppliers->contact_number }}</td>
               <td>{{ $suppliers->email }}</td>
           
               
               <td>
                <form action="#" method="POST">
                    <a href="{{ route('suppliers.create') }}" title="show">
                        <i class="fas fa-plus text-success  fa-lg"></i>
                    </a>
                    @csrf
                        @method('DELETE')
                    
                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                <i class="fas fa-trash-alt"></i>
                             </button>
                     </form>
               </td>
           </tr>
           @endif
           @endforeach  
        </table> 
    </table> 
@endsection