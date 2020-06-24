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
		<div class="col-lg-12 margin-tb alert alert-primary">
	        <div class="pull-">
	            <a class="btn btn-warning" href="{{asset('admin/cate')}}"><i class="fas fa-arrow-circle-left"></i> Back</a>
	        </div>
	    </div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-xs-12 col-md-7 col-lg-7">

				<div class="card">
					<div class="card-header bg-info">
						Sửa Tên Danh Mục: <strong>{{$cate->cate_name}}</strong>
					</div>
					<div class="card-body">
						@include('notice.note')
						<style type="text/css">
							select {
							  font-family: 'Font Awesome 5 Free'
							}

						</style>
						<form method="post">
							<div class="form-group">
								<label>Lựa Chọn Menu - Danh mục</label>

								<select required name="parent_cate_id" class="form-control custom-select">
									<option value="0" style="color: red;">&#xf35a; LÀ MENU CHA</option>
									<option value="" disabled style="color: blue; background: #dee3e3">Là Menu Con Của</option>
									@foreach($cate_parent as $c)
									<option value="{{$c->cate_id}}"
										@if($c->cate_id == $cate->parent_cate_id)
											selected
										@endif
										style="background: #f5f5f5; text-transform: capitalize;">&#xf07c; {{$c->cate_name}}</option>
									@endforeach
			                    </select>

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