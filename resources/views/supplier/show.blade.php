@extends('layouts.app')

@section('content')
<div class="container">
  
  <div class="row">
    <div class="col-md-8">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Show Supplier</h3>
          <div class="row">
        <div class="col-md-4 offset-md-8">
            <a class="btn btn-block btn-primary btn-sm" href="{{ route('suppliers.create') }}">Add New Supplier</a>
        </div>
    </div>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('suppliers.store') }}" method="POST" role="form">
          <div class="card-body">
            <div class="form-group">
              @csrf
              <label for="name">Name (Company/Shop)</label>
              <input type="text" disabled class="form-control" value="{{ $companies->name }}" id="name" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Address</label>
              <input type="text" disabled class="form-control" value="{{ $companies->email }}" id="email" name="email" placeholder="Address">
            </div>

            <div class="form-group row">
              <div class="col-md-4">
                <label for="phone">Phone Number</label>
                <input type="text" disabled class="form-control" value="{{ $companies->website }}" id="website" name="website" placeholder="Phone Number">
              </div>
            </div>
          
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a class="btn btn-primary btn-lg" href="{{ route('suppliers.edit',$companies->id) }}" class="btn btn-primary">Edit</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection