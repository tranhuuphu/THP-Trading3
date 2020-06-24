@extends('admin.master')


@section('main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="margin-top: 40px;">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="{{asset('admin/')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><strong><a href="{{asset('admin/roles')}}">Roles Management</a></strong></li>
            </ol>

        </div>
    </div><!--/.row-->
    <div class="">
        <div class="col-lg-12 margin-tb alert alert-warning">
            <div class="pull-left">
                <h2>Role Management</h2>
            </div>
            <div class="pull-right">
            @can('role-create')
                <a class="btn btn-success" href="{{ route('roles.create') }}"><i class="fas fa-plus-circle"></i> Create New Role</a>
                @endcan
            </div>
        </div>
    </div>
    <hr>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
      <tr>
         <th>No</th>
         <th>Name</th>
         <th width="280px">Action</th>
      </tr>
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                @can('role-edit')
                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                @endcan
                @can('role-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
        @endforeach
    </table>


    {!! $roles->render() !!}
</div>

@endsection