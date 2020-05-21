@extends('admin.master')
@section('title', 'Thêm sản phẩm')
@section('main')
		
	<div class="col-sm-12 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12" style="margin-top: 40px;">
				<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item">Trang</li>
                    <li class="breadcrumb-item"><strong>Thêm Trang</strong></li>
                </ol>

			</div>
		</div><!--/.row-->
		
		<div class="row" style="margin-top: 10px;">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="card">
					<div class="card-header bg-success text-white">
						<strong><i class="fas fa-plus"></i> Thêm Trang Mới</strong>
					</div>
					<div class="card-body">
						@include('notice.note')
						<form method="post" enctype="multipart/form-data">
							<div class="row" >

								<div class="col-lg-8 col-xs-12" style=" background: #9ea7a8; padding-top: 20px">
									<div class="form-group" >
										<label><strong>Tiêu Đề </strong></label>
										<input required type="text" name="page_title" class="form-control" value="{{old('page_title')}}">
									</div>
									<hr>


									<div class="form-group" >
										<label>Nội Dung</label>
										<textarea class="ckeditor" required name="page_content"></textarea>
										<script type="text/javascript">
											var editor = CKEDITOR.replace('page_content',{
												language:'vi',
												filebrowserImageBrowseUrl: 'editor/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl: 'editor/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl: 'editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl: 'editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
									</div>
									<hr>

									<div class="form-group" >
										<label>Meta Key</label>
										<textarea class="form-control" rows="5" required name="meta_key"></textarea>
									</div>
									<hr>

									<div class="form-group" >
										<label>Meta Desc</label>
										<textarea class="form-control" rows="5" required name="meta_desc"></textarea>
									</div>
									
								</div>

								<div class="col-lg-4 col-xs-12" style="background: #eee; padding-top: 20px">

									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="page_status" class="form-control">
											<option value="0">Thường</option>
											<option value="1" @if($page_status == 1) disabled @endif>Trang Chủ</option>
					                    </select>
									</div>
									<hr>

									<div class="form-group" >
											
										
										<hr>
										<label>Ảnh Trang</label>
										<div class="custom-file">
											<input type="file" id="img customFile" class="custom-file-input form-control" name="page_image" onchange="changeImg(this)">
											<label class="custom-file-label" for="customFile">Choose Image</label>
										</div>



										{{-- <input required id="img" readonly="" type="file" name="page_image" class="form-control " onchange="changeImg(this)" style=""> --}}
										<br>
										<br>
					                    <img id="avatar" class="thumbnail" width="100%" src="img/new_seo-10-512.png">
									</div>
									<hr>

									

								</div>
								<div class="col-xs-12 col-lg-12" style="background: #5da8de; padding: 20px; margin: 30px 0 10px 0;">
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Hủy bỏ</a>
								</div>


							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop