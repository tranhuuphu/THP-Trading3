@extends('admin.master')
@section('title', 'Danh sách sản phẩm')



@section('main')


	<div class="col-sm-12 col-lg-12 main" style="margin-top: 40px;">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="{{asset('admin/')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{asset('admin/post')}}"><strong>Bài Viết</strong></a></li>
                </ol>
				<div class="card">
				  <div class="card-header">
				    <a href="{{asset('admin/post/add')}}" class="btn btn-warning"><i class="fas fa-plus"></i> Thêm bài viết</a>
				  </div>
				</div>
                
                @include('notice.note')
				


				<div class="card mb-4" style="margin-top: 20px;">
                    <div class="card-header bg-dark text-white"><i class="fas fa-table mr-1"></i> <strong>Danh Sách Bài Viết</strong></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Bài Viết</th>
                                        <th>Menu</th>
                                        <th>Nổi Bật</th>
                                        <th>Ảnh</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Bài Viết</th>
                                        <th>Menu</th>
                                        <th>Nổi Bật</th>
                                        <th>Ảnh</th>
                                        <th>Option</th>
                                    </tr>
                                </tfoot>
                                <tbody>
									@foreach($post as $p)
                                        <tr>
                                            <td>{{$p->post_id}}</td>
											<td>{{$p->post_title}}</td>
											<td>{{$p->cate_name}}</td>
											<td>{{$p->post_status}}</td>
											<td>
												<img width="200px" src="{{asset('public/upload/post/'.$p->post_image)}}" class="thumbnail">
											</td>
											<td>
												<a href="{{asset('admin/post/edit/'.$p->post_id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Sửa</a>
												<a href="{{asset('admin/post/delete/'.$p->post_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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