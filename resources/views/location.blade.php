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
                <h2>Locations List</h2>
            </div>
            
        </div>
    </div>
    <table class="table table-striped table-bordered table-sm">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                
                <th>ID</th>
                <th width="5%">Locations</th>
                <th></th>
               
            </tr>
           </thead>

           @foreach ($location  as $location )
           
           <tr>
                           
               <td>{{ $location->id }}</td>
               <td>{{ $location->location }}</td>
           
               
               <td>
                
               </td>
           </tr>
           @endforeach  


           
         
        </table> 
    </table> 
    @endsection