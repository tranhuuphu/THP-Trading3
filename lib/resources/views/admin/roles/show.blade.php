@extends('admin.master')


@section('main')
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12" style="margin-top: 40px;">
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active"><a href="{{asset('admin/')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><strong><a href="{{asset('admin/roles')}}">Roles Management</a></strong></li>
              <li class="breadcrumb-item"><strong>Show Detail Roles Management</strong></li>
          </ol>

      </div>
  </div><!--/.row-->
    <div class="">
        <div class="col-lg-12 margin-tb alert alert-secondary">
            <div class="pull-left">
                <h2> Show Role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"><i class="fas fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permissions:</strong>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success">{{ $v->name }},</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection