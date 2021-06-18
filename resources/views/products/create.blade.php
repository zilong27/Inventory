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
         <div class="col-md-10">
            <div class="card">
                <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back  <i class="fas fa-backward "></i> </a>
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
    <form action="{{ route('products.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Item Name:</strong>
                    <input type="text" name="name"  class="form-control" placeholder="Name" >
                    <div class="valid-feedback">
                    *required
                      </div>
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Model:</strong>
                    <select type="text" name="models" class="form-control" placeholder="Models" >
                    
                        @foreach ($products as $settings) 
                        {
                          <option value="{{ $settings->model }}">{{ $settings->model }}</option>
                        }
                        @endforeach
                      </select>
                </div>
            </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Supplier:</strong>
                        <select type="text" name="suppliers" class="form-control" placeholder="suppliers" >
                        @foreach ($suppliers as $suppliers) 
                        {
                          <option value="{{ $suppliers->suppliers }}">{{ $suppliers->suppliers }}</option>
                        }
                        @endforeach
                      </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Location:</strong>
                        <select type="text" name="locations" class="form-control" placeholder="locations" >
                        @foreach ($locations as $locations) 
                        {
                          <option value="{{ $locations->locations }}">{{ $locations->locations }}</option>
                        }
                        @endforeach
                      </select>
                    </div>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="Put the price">
                    <div class="valid-feedback">
                        *required
                          </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantity:</strong>
                    <input type="number" name="quantity" class="form-control" placeholder="QTY">
                    <div class="valid-feedback">
                        *required
                          </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        

    </form>
@endsection