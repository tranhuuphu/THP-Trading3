@extends('site.master')

@section('content')
	{{-- Breadcrum --}}
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				
				<!-- post widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2>Search Result From <label style="color: red">Google</label> key: <label style="color: #fc9d03">{{$show_result}}</label></h2>
					</div>
					{{-- <div class="gcse-search"></div> --}}
					<div class="gcse-searchresults-only"></div>

					{{-- @foreach($search as $s)
						<?php
							foreach ($cate as $k) {
								if($k->cate_id == $s->post_cate_id){
									$c3_slug = $k->cate_slug;
									$c3_cate = $k->cate_name;
								}
							}
						?>
						<div class="post post-widget">
							<a class="post-img image_carbox3" href="blog-post.html"><img src="{{asset('public/upload/post/'.$s->post_image)}}" alt="{{$s->post_title}}"></a>
							<div class="post-body">
								<h3 class="post-title"><a href="{{asset('/'.$c3_slug.'/'.$s->post_slug.'-'.$s->post_id.'.html')}}" title="{{$s->post_title}}">{{$s->post_title}}</a></h3>
								<p>{{$s->post_intro}}</p>
							</div>
						</div>
					@endforeach --}}

					
				</div>
				<!-- /post widget -->

				{{-- {{$search->appends(['q' => $show_result])->links()}} --}}
			</div>
			<div class="col-md-4">
				<!-- ad -->
				<div class="aside-widget text-center">
					<a href="javascript:void(0)" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-1.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
		</div>
	</div>
</div>
@stop

@section('title'){{'Tìm kiếm từ khóa: '.$show_result}}@stop

@section('description'){{$show_result}}@stop

@section('keywords'){{$show_result}}@stop