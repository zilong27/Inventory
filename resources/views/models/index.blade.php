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
        <div class="col-lg-9 margin-tb">
            <div class="pull-left">
                <h2>Models List</h2>
            </div>
            
        </div>
    </div>
    
    @if(Auth::user())
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('settings.create') }}"> Add Model  <i class="fas fa-plus-circle"></i>
            </a>    
            
    </div>
</div>
@endif
    <table class="table table-striped table-bordered table-sm">
         <table class="table table-hover table-striped">
             <thead>
             <tr>
                 
                <th></th>
                 <th>Models Name</th>
                <th>Model Number</th>
                <th width="1%">Actions</th>
               
             </tr>
            </thead>
            @foreach ($models  as $models )
            @if(isset(Auth::user()->id) && Auth::user()->id == $models->user_id)
      
           <tr>
                           
               <td></td>
               <td>{{ $models->model }}</td>
               <td>{{ $models->model_number }}</td>
              
              
           <td>
           <form action="{{ route('settings.destroy',$models->id) }}" method="POST">
            <a href="{{ route('settings.create') }}" title="show">
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