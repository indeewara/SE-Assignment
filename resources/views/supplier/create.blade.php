@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">Add New Company</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form action="{{ route('suppliers.store') }}" method="POST" role="form">
      <div class="card-body">
        <div class="form-group">
           @csrf
          <label for="name">Name (Company/Shop)</label>
          <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" placeholder="Enter Name">
          {!! $errors->first('name', '<p class="error invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="email">
        </div>

        <div class="form-group row {{ $errors->has('phone') ? 'has-error' : ''}}">
            <div class="col-md-4">
                <label for="phone">Web Site</label>
                <input type="text" class="form-control" id="website" name="website" placeholder="website">

                {!! $errors->first('phone', '<p class="error invalid-feedback">:message</p>') !!}
              </div>
        </div>
        </div>
       
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
        </div>
    </div>
</div>
@endsection


