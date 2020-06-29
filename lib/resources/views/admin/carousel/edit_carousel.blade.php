@extends('Admin.master')
@section('title', 'Trang Sửa Danh Mục')
@section('main')	
		
	<div class="col-sm-12 col-sm-offset-3 col-lg-12 col-lg-offset-2 main" style="margin-top: 40px;">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item active">Ảnh</li>
                    <li class="breadcrumb-item"><strong>Sửa Ảnh</strong></li>
                </ol>
			</div>
		</div><!--/.row-->
		
		<div class="row" style="margin-top: 10px;">
			<div class="col-xs-12 col-md-7 col-lg-7">

				<div class="card">
					<div class="card-header bg-info">
						Sửa Tên Ảnh: <strong>{{$carousel->carousel_title}}</strong>
					</div>
					<div class="card-body">
						@include('notice.note')
						<form method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Tên Ảnh:</label>
    							<input type="text" name="carousel_title" class="form-control" placeholder="Tiêu Đề Ảnh..." value="{{$carousel->carousel_title}}">
							</div>
							<hr>

							<div class="form-group" >
								<label>Lựa chọn trạng thái</label><br>
								Là ảnh liên hệ <input type="radio" name="status" @if($carousel->status == 0) checked @endif value="0">
								<hr>
								Là ảnh xuất hiện trên right bar <input type="radio" name="status" @if($carousel->status == 1) checked @endif value="1">
								<hr>
								Là ảnh không hiện trên right bar <input type="radio" name="status" @if($carousel->status == 2) checked @endif value="2">
							</div>
							<hr>

							<div class="form-group" >
								<label>Ảnh Slide</label>
								<div class="custom-file">
									<input type="file" id="img customFile" class="custom-file-input form-control" name="carousel_image" onchange="changeImg(this)">
									<label class="custom-file-label" for="customFile">Choose Image</label>
								</div>
								{{-- <input required id="img" readonly="" type="file" name="post_image" class="form-control" onchange="changeImg(this)"> --}}
								<br><br>
			                    <img id="avatar" class="thumbnail" width="100%" src="{{asset('public/upload/carousel/'.$carousel->carousel_image)}}">
							</div>
							<hr>

							
							<div class="form-group">
								<input class="form-control btn btn-primary" type="submit" name="submit" value="Sửa">
								
							</div>
							<div class="form-group">
								<a href="{{asset('admin/carousel')}}" class="form-control btn btn-danger">Hủy</a>
							</div>
							{{csrf_field()}}
						</form>
					</div>
				</div>

			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop