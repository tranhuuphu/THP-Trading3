
{{-- @extends('layouts.app') --}}
@extends('admin.master')

@section('main')
<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12" style="margin-top: 40px;">
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active"><a href="{{asset('admin/')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><strong>User Management</strong></li>
          </ol>

      </div>
  </div><!--/.row-->
  
  <div class="">
    <div class="col-lg-12 margin-tb alert alert-primary">
{{--         <div class="pull-left">
            <h2>Users Management</h2>
        </div> --}}
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"><i class="fas fa-user-plus"></i> Create New User</a>
        </div>
    </div>
  
    <hr>




    @if ($message = Session::get('success'))
    <div class="alert alert-success col-lg-12">
      <p>{{ $message }}</p>
    </div>
    @endif


    <table class="table table-bordered">
     <tr>
       <th>No</th>
       <th>Name</th>
       <th>Email</th>
       <th>Roles</th>
       <th width="280px">Action</th>
     </tr>
     <?php $i = 0; ?>
     @foreach ($data as $key => $user)
      <tr>
        
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
               <label class="badge badge-success">{{ $v }}</label>
            @endforeach
          @endif
        </td>
        <td>
           <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
           <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline', 'onclick' => "return confirm('are you sure?')"]) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
      </tr>
     @endforeach
    </table>


    {!! $data->render() !!}


  </div>
</div>
@endsection