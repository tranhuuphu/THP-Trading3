@extends('Admin.master')
@section('title', 'Trang Quản Lý Danh Mục')
@section('main')		
	<div class="col-sm-12 col-lg-12 main" style="margin-top: 40px;">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="{{asset('admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><strong>Người Dùng <small>User</small></strong></li>
                </ol>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-7 col-lg-7">

				<div class="card mb-4" style="margin-top: 10px;">
                    <div class="card-header bg-primary text-white"><i class="fas fa-table mr-1"></i>Danh Sách User</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
	                                    <th>Email User</th>
	                                    <th>Level</th>
						                <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Email User</th>
	                                    <th>Level</th>
						                <th>Tùy chọn</th>
                                    </tr>
                                </tfoot>
                                <tbody>
									@foreach($user as $u)
                                        <tr>
                                            <td>{{$u->email}}</td>
											<td>{{$u->level}}</td>
											<td>
					                    		<a href="{{asset('admin/user/edit/'.$u->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
					                    		<a href="{{asset('admin/user/delete/'.$u->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
					                  		</td>
                                        </tr>
									@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
			
			<div class="col-xs-12 col-md-5 col-lg-5">
				<div class="card" style="margin-top: 10px;">
					<div class="card-header  bg-info text-white">
						<strong><i class="fas fa-plus"></i> Thêm User</strong>
					</div>
					<div class="card-body">
						@include('notice.note')
						
						<div class="card shadow-lg border-0 rounded-lg">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                            <div class="card-body">
                                <form method="post" action="{{asset('admin/user/add')}}">
                                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" /></div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="" type="password" placeholder="Enter password" name="password" /></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label><input class="form-control py-4" id="" type="password" placeholder="Confirm password" name="rePassword"/></div>
                                        </div>

                                        <div class="form-group col-md-12" >
											<label>Level</label>
											<select required name="level" class="form-control">
												<option value="1">Quản Trị</option>
												<option value="0">Thường</option>
						                    </select>
										</div>
                                    </div>
									<hr>
                                    <div class="form-group">
										<input type="submit" class="btn btn-primary btn-block" name="submit" value="Create Account">
									</div>
                                    {{csrf_field()}}
                                </form>
                            </div>
                        </div>


					</div>
				</div>

			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
	