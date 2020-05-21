@extends('site.master')

@section('content')

<!-- section -->
<div class="section" style="margin-top: 40px;">
	<!-- container -->
	<div class="container">
		<!-- row -->

		<style type="text/css">
			#adBlock, #e2{
				display: hidden !important;
			}
			#e2, .e2{
				display: hidden !important;
			}
		</style>

		<div class="row">
			<div class="col-md-8">
				<h1 style="text-align: justify;">Bạn đã nhập từ khóa không hợp lệ</h1>

				<hr>
				<h2>Kết quả tìm kiếm của <label style="color: red">Google</label></h2>
				<hr>
				
				{{-- <div class="gcse-search"></div> --}}
				<div class="gcse-searchresults-only"></div>
			</div>
			<!-- aside -->
			<div class="col-md-4">
				<!-- ad -->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-1.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->

				
			</div>
			<!-- /aside -->
		</div>
		<!-- /row -->
		<hr>
	</div>
	<!-- /container -->
</div>
<!-- /section -->
@stop

@section('title'){{"Tìm kiếm không tồn tại"}}@stop

@section('description'){{"Tìm kiếm không tồn tại"}}@stop

@section('keywords'){{"Tìm kiếm không tồn tại"}}@stop