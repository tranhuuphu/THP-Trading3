@extends('site.master')
@section('content')


	
	<style type="text/css">
		.main-post img{
			width: 80% !important;
			vertical-align: middle;
			margin: auto;
			align-items :center;
		}
		.main-post p{
			color: #000;
		}
	</style>
	<!-- section -->
	<div class="section" >
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Post content -->
				<div class="col-md-8">
					<!-- Page Header -->
					<div id="post-header" class="page-header" >
						<div class="container">
							<div class="row">
								<div class="col-md-12" style="background: #fff; margin: 0 -15px;">
									
									<h1 class="mt-2" style="font-size: 30px; font-weight: bold;">{{$post_detail->post_title}}</h1>

									<hr>
									<div class="main-post post2_header mt-3 mb-3">
										{!!$post_detail->post_content!!}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section-row sticky-container">
						
						<hr>
						<div class="card bg-secondary" style="margin-bottom: 10px; border-radius: 0;">
							<div class="card-header text-white text-bold">
								<i class="fa fa-share" aria-hidden="true"></i> Share This Post
							</div>
						</div>
						<div class="post-shares sticky-shares">

							<div class="fb-share-button" data-href="={{asset('/'.$cate_slug.'/'.$post_detail->post_slug.'-'.$post_detail->post_id.'.html')}}" data-layout="button_count" data-size="large"></div>
							
							<a class="twitter-share-button" href="https://twitter.com/intent/tweet?url={{asset('/'.$cate_slug.'/'.$post_detail->post_slug.'-'.$post_detail->post_id.'.html')}}" data-size="large" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="https://pinterest.com/pin/create/button/?url={{asset('/'.$cate_slug.'/'.$post_detail->post_slug.'-'.$post_detail->post_id.'.html')}}&media{{asset('public/upload/post/'.$post_detail->post_image)}}/&description={{$post_detail->meta_desc}}" style="margin-right: 10px;" target="_blank">Save</a>

							<a href="https://www.linkedin.com/shareArticle?mini=true&url={{asset('/'.$cate_slug.'/'.$post_detail->post_slug.'-'.$post_detail->post_id.'.html')}}&title={{$post_detail->post_title}}&summary={{$post_detail->post_intro}}&source=" target="_blank"><i class="fa fa-linkedin"></i></a>

						</div>
					</div>

					<!-- ad -->
					<div class="section-row text-center">
						
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-2.jpg" alt="" width="100%">
						</a>
					</div>


					<!-- reply -->
					<div class="section-row">
						<div class="section-title">
							<h2>Leave a reply</h2>
						</div>
						<div class="fb-comments" data-href="https://curie.vn" data-width="auto" width="100%" data-numposts="5"></div>
					</div>

					<!-- /reply -->
				</div>
				<!-- /Post content -->

				<!-- aside -->
				<div class="col-md-4">
					<!-- ad -->
					
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block; margin: auto;">
							<img class="img-responsive" src="./img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /ad -->

					<style>
						.post-singer {
						  overflow: auto;
						  padding-bottom: 25px;
						  padding-left: 10px;
						  padding-right: 10px;
						  margin-bottom: 10px;
						  border-bottom: 1px dashed #b9bbbd;
						}
						.post-singer a img:hover{
							opacity: 0.85;
							transition: 0.3s;
						}

						.img2 {
						  float: left;
						  padding: 0 5px 0 0;
						  margin-top: 5px;
						  width: 30%;
						}
						.intro{
							font-size: 17px;
							text-align: justify;
						}
						.title-2{
							padding: 5px 10px;
							font-size: 20px;
							font-weight: bold;
							color: #434343;
						}
						.blog-sidebar .bs-categories {
							margin-bottom: 60px;
						}

						.blog-sidebar .bs-categories ul li {
							list-style: none;
							position: relative;
							padding-left: 22px;
						}

						.blog-sidebar .bs-categories ul li a {
							font-size: 16px;
							color: #151618;
							line-height: 30px;
						}

						.blog-sidebar .bs-categories ul li:before {
							position: absolute;
							left: 0;
							top: 11px;
							height: 8px;
							width: 8px;
							background: #636363;
							content: "";
							border-radius: 50%;
						}

						.blog-sidebar .bs-recent {
							margin-bottom: 65px;
						}

						.blog-sidebar .bs-popular-tag .tags a {
							display: inline-block;
							font-size: 14px;
							color: #636363;
							font-weight: 500;
							text-transform: uppercase;
							background: #f2f2f2;
							padding: 4px 16px;
							margin-right: 6px;
							margin-bottom: 10px;
						}

						@media only screen and (max-width: 991px) {
						    .img2 {
							  width: 40%;
							}
							.intro{
								font-size: 15px;
							}
							.title-2{
								font-size: 18px;
							}
						}
					</style>

					<!-- post widget -->
					<div class="aside-widget" >
						<div class="section-title sidebar-title">
							<h5>Bài Viết Liên Quan</h5>
						</div>
						@foreach($next as $n)
							{{-- Post Singer --}}
							<div style="background: #fff">
								<div class="title-2">
									<a href="{{asset('/'.$n->cate_slug.'/'.$n->post_slug.'-'.$n->post_id.'.html')}}" title="{{$n->post_title}}">{{$n->post_title}}</a>
								</div>
								<div class="post-singer">
								  <a href="{{asset('/'.$n->cate_slug.'/'.$n->post_slug.'-'.$n->post_id.'.html')}}" title="{{$n->post_title}}">
								  	<img class="img2" src="{{asset('public/upload/post/'.$n->post_image)}}" alt="{{$n->post_title}}" height="auto">
								  </a>
								  <div class="intro">{{$n->post_intro}}</div>
								</div>
							</div>
						@endforeach

						@foreach($previous as $n)


							{{-- Post Singer --}}
							<div style="background: #fff">
								<div class="title-2">
									<a href="{{asset('/'.$n->cate_slug.'/'.$n->post_slug.'-'.$n->post_id.'.html')}}" title="{{$n->post_title}}">{{$n->post_title}}</a>
								</div>
								<div class="post-singer">
								  <a href="{{asset('/'.$n->cate_slug.'/'.$n->post_slug.'-'.$n->post_id.'.html')}}" title="{{$n->post_title}}">
								  	<img class="img2" src="{{asset('public/upload/post/'.$n->post_image)}}" alt="{{$n->post_title}}" height="auto">
								  </a>
								  <div class="intro">{{$n->post_intro}}</div>
								</div>
							</div>
						@endforeach

					</div>
					<!-- /post widget -->
					
					<div class="blog-sidebar">
                        <div class="bs-categories">
                            <div class="section-title sidebar-title">
                                <h5>Categories</h5>
                            </div>
                            <ul>
                            	@foreach($cate as $c)
                                	<li><a href="{{$c->cate_slug}}" title="{{$c->cate_name}}">{{$c->cate_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        
                        
                        
                    </div>

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
@section('title'){{$post_detail->post_title}}@stop

@section('description'){{$post_detail->meta_desc}}@stop

@section('keywords'){{$post_detail->meta_key}}@stop

@section('image'){{asset('public/upload/post/'.$post_detail->post_image)}}@stop

@section('url'){{asset('/'.$cate_slug.'/'.$post_detail->post_slug.'-'.$post_detail->post_id.'.html')}}@stop

@section('created_at'){{$post_detail->created_at}}@stop

@section('updated_at'){{$post_detail->updated_at}}@stop

@section('script')@stop

@section('script_code')
<div id="fb-root"></div>
	  <script>(function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
	    fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));</script>

	  <script
	    type="text/javascript"
	    async defer
	    src="//assets.pinterest.com/js/pinit.js"
	></script>
	
@stop

