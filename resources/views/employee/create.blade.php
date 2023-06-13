@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Add New Employee</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('employees.store') }}" method="POST" role="form" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            @csrf
                            <label for="name">First Name</label>
                            <input type="text" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" placeholder="Enter Name">
                            {!! $errors->first('name', '<p class="error invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" value="{{ old('last_name') }}" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : ''}}" id="last_name" name="last_name" placeholder="Enter Last Name">
                            {!! $errors->first('last_name', '<p class="error invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" id="email" name="email" placeholder="Enter Email">
                            {!! $errors->first('email', '<p class="error invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" id="address" name="address" placeholder="Enter Address">
                            {!! $errors->first('address', '<p class="error invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group row {{ $errors->has('image') ? 'has-error' : ''}}">
                            <label for="image">Image</label>
                            <input type="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : ''}}" id="image" name="image" placeholder="Upload an image">
                            {!! $errors->first('image', '<p class="error invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            <label for="nic">NIC</label>
                            <input type="text" class="form-control {{ $errors->has('nic') ? 'is-invalid' : ''}}" id="nic" name="nic" placeholder="Enter NIC">
                            {!! $errors->first('nic', '<p class="error invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            <label for="phone_1">Phone 1</label>
                            <input type="text" class="form-control {{ $errors->has('phone_1') ? 'is-invalid' : ''}}" id="phone_1" name="phone_1" placeholder="Enter Phone 1">
                            {!! $errors->first('phone_1', '<p class="error invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            <label for="phone_2">Phone 2</label>
                            <input type="text" class="form-control {{ $errors->has('phone_2') ? 'is-invalid' : ''}}" id="phone_2" name="phone_2" placeholder="Enter Phone 2">
                            {!! $errors->first('phone_2', '<p class="error invalid-feedback">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            <label for="company_id">Company</label>
                            <select class="form-control" id="company_id" name="company_id">
                                @foreach($companies as $company_id => $company_name)
                                    <option value="{{ $company_id }}">{{ $company_name }}</option>
                                @endforeach
                            </select>
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



