@extends('admin.master')


@section('main')
<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12" style="margin-top: 40px;">
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active"><a href="{{asset('admin/')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><strong><a href="{{asset('admin/roles')}}">Roles Management</a></strong></li>
              <li class="breadcrumb-item"><strong>Create New Roles Management</strong></li>
          </ol>

      </div>
  </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"><i class="fas fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>
    <hr>


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


    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vai Trò:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <hr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gán Quyền:</strong>
                <table class="table mt-3">
                  <thead>
                    {{-- <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr> --}}
                  </thead>
                  <tbody>
                    @foreach($permission as $value)
                        {{-- <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                        {{ $value->name }}</label> --}}
                        <tr>
                          <td class="font-weight-bold">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                        {{ $value->name }}</td>
                        </tr>
                    {{-- <br/> --}}
                    @endforeach
{{--                     <tr>
                      <td>Mark</td>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                    </tr> --}}

                  </tbody>
                </table>

            </div>
        </div>
        <hr>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-warning ml-20"><a href="{{ route('roles.index') }}">Cancel<a></button>
        </div>
    </div>
    {!! Form::close() !!}


</div>
@endsection