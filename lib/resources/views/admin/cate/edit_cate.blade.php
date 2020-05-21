@extends('Admin.master')
@section('title', 'Trang Sửa Danh Mục')
@section('main')	
		
	<div class="col-sm-12 col-sm-offset-3 col-lg-12 col-lg-offset-2 main" style="margin-top: 40px;">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item active">Danh Mục</li>
                    <li class="breadcrumb-item"><strong>Sửa Danh Mục</strong></li>
                </ol>
			</div>
		</div><!--/.row-->
		
		<div class="row" style="margin-top: 10px;">
			<div class="col-xs-12 col-md-7 col-lg-7">

				<div class="card">
					<div class="card-header bg-info">
						Sửa Tên Danh Mục: <strong>{{$cate->cate_name}}</strong>
					</div>
					<div class="card-body">
						@include('notice.note')
						<form method="post">
							<div class="form-group">
								<label>Tên danh mục:</label>
    							<input type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$cate->cate_name}}">
							</div>

							<div class="form-group">
								<label>Meta Key:</label>
								<br>
								<textarea name="meta_key" class="form-control">{{$cate->meta_key}}</textarea>
							</div>

							<div class="form-group">
								<label>Meta Desc:</label>
								<br>
								<textarea name="meta_desc" class="form-control" rows="5">{{$cate->meta_desc}}</textarea>
							</div>

							<div class="form-group">
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