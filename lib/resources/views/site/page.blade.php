@extends('site.master')

@section('content')


	{{-- Breadcrum --}}
	<div class="container">
		<nav aria-label="breadcrumb" style="margin: 30px 0;">
		  <ol class="breadcrumb" style="border-radius: 0; background: #54b8ff">
		    <li class="breadcrumb-item"><a href="{{asset('')}}">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page"><a href="{{asset('/'.$page_result->page_slug.'.html')}}" title="{{$page_result->page_title}}" style="text-transform: capitalize; color: #fff">{{$page_result->page_title}}</a></li>
		  </ol>
		</nav>
	</div>
	
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					{!!$page_result->page_content!!}
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
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

@stop


{{-- Seo --}}
@section('title'){{$page_result->page_title}}@stop

@section('description'){{$page_result->meta_desc}}@stop

@section('keywords'){{$page_result->meta_key}}@stop

@section('image'){{asset('public/upload/page/'.$page_result->page_image)}}@stop

@section('url'){{asset('/'.$page_result->page_slug.'.html')}}@stop

@section('created_at'){{$page_result->created_at}}@stop

@section('updated_at'){{$page_result->updated_at}}@stop