@extends('admin.master')


@section('main')
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12" style="margin-top: 40px;">
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active"><a href="{{asset('admin/')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><strong><a href="{{asset('admin/roles')}}">Roles Management</a></strong></li>
              <li class="breadcrumb-item"><strong>Edit Detail Roles Management</strong></li>
          </ol>

      </div>
  </div><!--/.row-->
    
    <div class="col-lg-12 margin-tb alert alert-danger">
        <div class="pull-left">
            <h2>Edit Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"><i class="fas fa-arrow-circle-left"></i> Back</a>
        </div>
    </div>
    

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

        {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permission:</strong>
                        <br/>
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                        <br/>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        {!! Form::close() !!}
    

</div>
@endsection
