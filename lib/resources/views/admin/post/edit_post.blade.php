@extends('admin.master')
@section('title', 'Sửa bài viết')
@section('main')
		
	<div class="col-sm-12 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12" style="margin-top: 40px;">
				<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="{{asset('admin/')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{asset('admin/post')}}">Bài Viết</a></li>
                    <li class="breadcrumb-item"><strong>Sửa Bài Viết</strong></li>
                </ol>
			</div>
		</div><!--/.row-->
		
		<div class="row" style="margin-top: 10px;">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="card">
					<div class="card-header bg-danger text-white">
						<i class="fas fa-edit"></i> Tiêu Đề Bài Viết: <strong>{{$post->post_title}}</strong>
					</div>
					<div class="card-body">
						@include('notice.note')
						<style type="text/css">
							select {
				                font-family: 'Font Awesome 5 Free'
				            }

						</style>
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin: 0px 0">

								<div class="col-lg-8 col-xs-12" style=" background: #87837a; padding-top: 20px">
									<div class="form-group" >
										<label>Tiêu Đề Bài Viết</label>
										<input required type="text" name="post_title" class="form-control" value="{{$post->post_title}}">
									</div>
									<hr>
									

									<div class="form-group" >
										<label>Giới Thiệu</label>
										<textarea class="form-control" required name="post_intro" rows="5" maxlength="255">{{$post->post_intro}}</textarea>
									</div>
									<hr>


									<div class="form-group" >
										<label>Nội Dung</label>
										<textarea class="ckeditor" required name="post_content">{{$post->post_content}}</textarea>
										<script type="text/javascript">
											var editor = CKEDITOR.replace('post_content',{
												language:'en',
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
										<textarea class="form-control" rows="5" required name="meta_key" maxlength="255">{{$post->meta_key}}</textarea>
									</div>
									<hr>

									<div class="form-group" >
										<label>Meta Desc</label>
										<textarea class="form-control" rows="5" required name="meta_desc" maxlength="255">{{$post->meta_desc}}</textarea>
									</div>
								</div>

								<div class="col-lg-4 col-xs-12" style="background: #eee; padding-top: 20px">

									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="post_status" class="form-control">
											<option value="1" @if($post->post_status == 1) selected @endif>Công Khai</option>
											<option @if($post->post_status == 0) selected @endif value="0" >Riêng Tư</option>
					                    </select>
									</div>
									<hr>
									<div class="form-group" >
										<label>Bài viết nổi bật</label><br>
										Có: <input type="radio" @if($post->post_featured == 1) checked="" @endif name="post_featured" value="1" >
										Không: <input type="radio" @if($post->post_featured == 0) checked="" @endif name="post_featured" value="0" >
									</div>
									<hr>

									<div class="form-group" >
										<label>Lựa Chọn Menu Cho Bài Viết</label>

										<select required name="post_cate_id" class="custom-select form-control">
											@foreach($parent_cate as $c)
												<?php
													$cate_sub_exists = DB::table('cate')->where('parent_cate_id', $c->cate_id)->first();
													$cate_sub_exists2 = DB::table('cate')->where('parent_cate_id', $c->cate_id)->get();
												?>
												@if(!isset($cate_sub_exists))
													<option value="{{$c->cate_id}}" @if($c->cate_id == $post->post_cate_id) selected @endif>{{$c->cate_name}}</option>
												@else
													<optgroup label="{{$c->cate_name}}">
														@foreach($cate_sub_exists2 as $c2)
															<option value="{{$c2->cate_id}}" style="background: #f5f5f5; text-transform: capitalize;"@if($c2->cate_id == $post->post_cate_id) selected @endif>&#xf35a; {{$c2->cate_name}}</option>
														@endforeach
													</optgroup>
												@endif
											@endforeach

					                    </select>
									</div>
									<hr>

									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<div class="custom-file">
											<input type="file" id="img customFile" class="custom-file-input form-control" name="post_image" onchange="changeImg(this)">
											<label class="custom-file-label" for="customFile">Change Image</label>
										</div>
										{{-- <input required id="img" readonly="" type="file" name="post_image" class="form-control" onchange="changeImg(this)"> --}}
										<br><br>
					                    <img id="avatar" class="thumbnail" width="100%" src="{{asset('public/upload/post/'.$post->post_image)}}">
									</div>

								</div>
								<div class="col-xs-12 col-lg-12" style="background: #5da8de; padding: 20px; margin: 30px 0 10px 0;">
									<input type="submit" name="submit" value="Cập Nhật" class="btn btn-info">
									<a href="{{asset('admin/post')}}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Hủy bỏ</a>
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

