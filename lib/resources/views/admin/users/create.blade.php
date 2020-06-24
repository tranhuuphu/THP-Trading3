{{-- @extends('layouts.app') --}}
@extends('admin.master')


@section('main')
<div class="container-fluid">
    {{-- <div class="row"> --}}
        <div class="row">
            <div class="col-lg-12" style="margin-top: 40px;">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="{{asset('admin/')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><strong><a href="{{asset('admin/users')}}">User Management</a></strong></li>
                    <li class="breadcrumb-item"><strong>Create New User</strong></li>
                </ol>

            </div>
        </div><!--/.row-->
        <div class="col-lg-12 margin-tb alert alert-success">

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"><i class="fas fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    {{-- </div> --}}


    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
           @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
           @endforeach
        </ul>
      </div>
    @endif



    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}


</div>
<br>
@endsection