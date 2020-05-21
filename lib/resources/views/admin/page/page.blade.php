@extends('admin.master')
@section('title', 'Danh sách sản phẩm')



@section('main')


	<div class="col-sm-12 col-lg-12 main" style="margin-top: 40px;">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item"><strong>Trang</strong></li>
                </ol>
				<div class="card">
				  <div class="card-header">
				    <a href="{{asset('admin/page/add')}}" class="btn btn-danger"><i class="fas fa-plus"></i> Thêm Trang</a>
				  </div>
				</div>

                @include('notice.note')
				


				<div class="card mb-4" style="margin-top: 20px;">
                    <div class="card-header bg-secondary text-black"><i class="fas fa-table mr-1"></i> <strong>Danh Sách Trang</strong></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Trang</th>
                                        <th>Trang Chủ</th>
                                        <th>Ảnh</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Trang</th>
                                        <th>HomePage</th>
                                        <th>Ảnh</th>
                                        <th>Option</th>
                                    </tr>
                                </tfoot>
                                <tbody>
									@foreach($page as $p)
                                        <tr>
                                            <td>{{$p->page_id}}</td>
											<td>{{$p->page_title}}</td>
											<td>@if($p->page_status == 1) Trang Chủ @endif</td>
											<td>
												<img width="200px" src="{{asset('public/upload/page/'.$p->page_image)}}" class="thumbnail">
											</td>
											<td>
												<a href="{{asset('admin/page/edit/'.$p->page_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('admin/page/delete/'.$p->page_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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