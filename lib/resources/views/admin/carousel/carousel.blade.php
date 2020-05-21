@extends('Admin.master')
@section('title', 'Trang Quản Lý Danh Mục')
@section('main')		
	<div class="col-sm-12 col-lg-12 main" style="margin-top: 40px;">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item"><strong>Carousel</strong></li>
                </ol>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
				<div class="card" style="margin-top: 10px;">
					<div class="card-header  bg-warning text-white">
						<strong><i class="fas fa-plus"></i> Thêm Slide</strong>
					</div>
					<div class="card-body">
						@include('notice.note')
						<form method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label><strong>Tiêu Đề:</strong></label>
								<input type="text" name="carousel_title" class="form-control" placeholder="Tiêu đề Carousel...">
							</div>
							<hr>

							<div class="form-group" >

								<label>Ảnh Slide Carousel</label>
								<div class="custom-file">
									<input type="file" id="img customFile" class="custom-file-input form-control" name="carousel_image" onchange="changeImg(this)">
									<label class="custom-file-label" for="customFile">Choose Image</label>
								</div>



								{{-- <input required id="img" readonly="" type="file" name="post_image" class="form-control " onchange="changeImg(this)" style=""> --}}
								<br>
								<br>
			                    <img id="avatar" class="thumbnail" width="100%" src="img/new_seo-10-512.png">
							</div>
							<hr>

							<div class="form-group">
								<input type="submit" class="btn btn-danger" name="submit" value="Add Carousel">
							</div>
							{{csrf_field()}}
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
	                                    <th>Tiêu Đề</th>
	                                    <th>Ảnh</th>
						                <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Tiêu Đề</th>
	                                    <th>Ảnh</th>
						                <th>Tùy chọn</th>
                                    </tr>
                                </tfoot>
                                <tbody>
									@foreach($carousel as $cr)
                                        <tr>
                                            <td>{{$cr->carousel_title}}</td>
                                            <td>
												<img width="200px" src="{{asset('public/upload/carousel/'.$cr->carousel_image)}}" class="thumbnail">
											</td>
											<td>
					                    		<a href="{{asset('admin/carousel/edit/'.$cr->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
					                    		<a href="{{asset('admin/carousel/delete/'.$cr->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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
	