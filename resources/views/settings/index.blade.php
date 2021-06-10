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
                <h2>Manage Settings</h2>
            </div>
            
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route ('settings.store') }}" method="POST" >
        @csrf
      
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Model:</strong>
                  <input type="text" name="model"  class="form-control" placeholder="Model" >
                  <div class="valid-feedback">
                  *required
                    </div>
                  {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
              </div>
          </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Location:</strong>
                      <input type="text" name="location" class="form-control" placeholder="Address" >
                  
                  </div>
              </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Supplier:</strong>
                  <input type="text" name="supplier" class="form-control" placeholder="Supplier Name">
                  <div class="valid-feedback">
                      *required
                        </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
       
@endsection