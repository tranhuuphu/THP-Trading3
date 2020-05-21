@extends('Admin.master')
@section('title', 'Trang Sửa Danh Mục')
@section('main')	
		
	<div class="col-sm-12 col-sm-offset-3 col-lg-12 col-lg-offset-2 main" style="margin-top: 40px;">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item active">User</li>
                    <li class="breadcrumb-item"><strong>Sửa User</strong></li>
                </ol>
			</div>
		</div><!--/.row-->
		
		<div class="row" style="margin-top: 10px;">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="card">
					<div class="card-header bg-info">
						Sửa Tên User: <strong>{{$user->email}}</strong>
					</div>
					<div class="card-body">
						@include('notice.note')
						<form method="post">
							
							
							@include('notice.note')
							
							<div class="card shadow-lg border-0 rounded-lg">
	                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Account</h3></div>
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
	                                    {{csrf_field()}}
	                                </form>
	                            </div>
	                        </div>




							<div class="form-group" style="margin-top: 20px;">
								<input class="form-control btn btn-primary" type="submit" name="submit" value="Sửa">
								
							</div>
							<div class="form-group">
								<a href="{{asset('admin/cate')}}" class="form-control btn btn-danger">Hủy</a>
							</div>
							{{csrf_field()}}
						</form>
					</div>
				</div>

			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop