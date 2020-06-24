@extends('admin.master')
@section('title', 'Trang Quản Lý Danh Mục')
@section('main')		
	<div class="col-sm-12 col-lg-12 main" style="margin-top: 40px;">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item"><strong>Danh Mục</strong></li>
                </ol>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
				<div class="card" style="margin-top: 10px;">
					<div class="card-header  bg-info text-white">
						<strong><i class="fas fa-plus"></i> Thêm Danh Mục</strong>
					</div>
					<div class="card-body">
						@include('notice.note')
						<style type="text/css">
							select {
				                font-family: 'Font Awesome 5 Free'
				            }

						</style>
						<form method="post">
							@csrf

							<div class="form-group" >
								<label>Lựa Chọn Menu - Danh mục</label>

								<select required name="parent_cate_id" class="custom-select form-control">
									<option value="0" style="color: red;">&#xf35a; Là Danh Mục Lớn</option>
									<div role="separator" class="dropdown-divider"></div>
									<optgroup label="Là Menu Con Của">
										@foreach($cate_parent as $c)
											<option value="{{$c->cate_id}}" style="background: #f5f5f5; text-transform: capitalize;">&#xf07c; {{$c->cate_name}}</option>
										@endforeach
									</optgroup>
			                    </select>
							</div>
							<div class="form-group">
								<label><strong>Tên danh mục:</strong></label>
								<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
							</div>
							<hr>

							<div class="form-group">
								<label><strong>Meta Key:</strong></label>
								<br>
								<textarea name="meta_key" class="form-control"></textarea>
							</div>
							<hr>

							<div class="form-group">
								<label><strong>Meta Desc:</strong></label>
								<br>
								<textarea name="meta_desc" class="form-control"></textarea>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-danger" name="submit" value=""><i class="fas fa-plus-circle"></i> Add New</button>
							</div>
						</form>
					</div>
				</div>



			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">

				<div class="card mb-4" style="margin-top: 10px;">
                    <div class="card-header bg-primary text-white"><i class="fas fa-table mr-1"></i>Danh Sách</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
	                                    <th>Tên danh mục</th>
						                <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Tên danh mục</th>
						                <th>Tùy chọn</th>
                                    </tr>
                                </tfoot>
                                <tbody>
									@foreach($cateList as $cate)
                                        <tr>
                                        	<td>
                                        		@if($cate->parent_cate_id == 0)
                                        			<strong style="color: red">{{$cate->cate_name}}</strong>
                                        		@elseif($cate->parent_cate_id != 0)
                                        			{{$cate->cate_name}}
                                        			@foreach($cateList as $cate2)
                                        				@if($cate2->cate_id == $cate->parent_cate_id)
                                        					(<small style="color: blue">{{$cate2->cate_name}}</small>)
                                        				@endif
                                        			@endforeach
                                        		@endif
                                        	</td>
									<td>
			                    		<a href="{{asset('admin/cate/edit/'.$cate->cate_id)}}" class="btn btn-warning"><i class="fas fa-edit" aria-hidden="true"></i> Sửa</a>
			                    		<a href="{{asset('admin/cate/delete/'.$cate->cate_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="far fa-trash-alt" aria-hidden="true"></i> Xóa</a>
			                  		</td>
                                        </tr>
									@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
	