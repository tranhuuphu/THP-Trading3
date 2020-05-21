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
						<form method="post">
							@csrf
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
								<input type="submit" class="btn btn-secondary" name="submit" value="Add New Cate">
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
                                            <td>{{$cate->cate_name}}</td>
									<td>
			                    		<a href="{{asset('admin/cate/edit/'.$cate->cate_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
			                    		<a href="{{asset('admin/cate/delete/'.$cate->cate_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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
	