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
         <div class="col-md-12">
            <div class="card">
                <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Models List</h2>
            </div>
            
        </div>
    </div>
    

    <table class="table table-striped table-bordered table-sm">
         <table class="table table-hover table-striped">
             <thead>
             <tr>
                 
                 <th>ID</th>
                 <th>Models</th>
                 <th>Actions</th>
             </tr>
            </thead>
            @foreach ($models  as $models )
           
           <tr>
                           
               <td>{{$models->id }}</td>
               <td>{{ $models->model }}</td>
           
               
               <td>
                <form action="#" method="POST">
            
                <a href="#">
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



    </table>
   
@endsection