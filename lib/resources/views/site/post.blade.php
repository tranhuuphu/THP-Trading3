@extends('site.master')

@section('content')


	<?php

		$post_2 = $post_cate->slice(0, 2);
		$post_3 = $post_cate->slice(2,10);
	?>


	<!-- Popular News Section Begin -->
    <section class="popular-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="row">
                    	@foreach($post_2 as $p_2)
                        	<div class="col-md-6">
                        	
                        	
	                            <div class="news-item popular-item set-bg" data-setbg="{{asset('public/upload/post/'.$p_2->post_image)}}">
	                                {{-- <div class="ni-tag tenis">Tenis</div> --}}
	                                <div class="ni-text">
	                                    <h5><a href="{{asset('/'.$cate_detail->cate_slug.'/'.$p_2->post_slug.'-'.$p_2->post_id.'.html')}}" title="{{$p_2->post_title}}">{{$p_2->post_title}}</a></h5>
	                                    
	                                </div>
	                            </div>
                            	<hr>
                        	</div>
                        @endforeach


                        <div class="col-md-12">

                        	@foreach($post_3 as $p_3)
	                        	<div class="news-item">
	                                <div class="ni-pic ni-pic2">
	                                    <img src="{{asset('public/upload/post/'.$p_3->post_image)}}" alt="$p_3->post_title">
	                                </div>
	                                <div class="ni-text">
	                                    <h5><a href="{{asset('/'.$cate_detail->cate_slug.'/'.$p_3->post_slug.'-'.$p_3->post_id.'.html')}}" title="{{$p_3->post_title}}">{{$p_3->post_title}}</a></h5>

	                                    <ul class="widget">
                                            <li>{{$p_3->post_intro}}</li>
                                        </ul>
	                                </div>
	                            </div>
                            @endforeach



                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title">
                        <h3>Follow <span>Us</span></h3>
                    </div>
                    <div class="follow-links">
                        <ul>
                            <li class="facebook">
                                <i class="fa fa-facebook"></i>
                                <div class="fl-name">Facebook</div>
                                <span class="fl-fan">2.530 Fans</span>
                            </li>
                            <li class="twitter">
                                <i class="fa fa-twitter"></i>
                                <div class="fl-name">Twitter</div>
                                <span class="fl-fan">2.046 Fans</span>
                            </li>
                            <li class="google">
                                <i class="fa fa-google"></i>
                                <div class="fl-name">Google</div>
                                <span class="fl-fan">1.170 Fans</span>
                            </li>
                        </ul>
                    </div>

                    <div class="section-title">
						<h2>Đọc Nhiều</h2>
					</div>
					@foreach($most_read as $mr)
						@foreach($cate as $c)
							@if($c->cate_id == $mr->post_cate_id)
								<div class="post post-widget">
									<a class="post-img img-carbox4" href="blog-post.html" style="margin-top: 7px;"><img src="{{asset('public/upload/post/'.$mr->post_image)}}" alt="{{$mr->post_title}}"></a>
									<div class="post-body">
										<h3 class="post-title"><a href="{{asset('/'.$c->cate_slug.'/'.$mr->post_slug.'-'.$mr->post_id.'.html')}}" title="{{$mr->post_title}}">{{$mr->post_title}}</a></h3>
										<p>{{$mr->post_intro}}</p>
									</div>
								</div>
							@endif
						@endforeach
					@endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Popular News Section End -->




@stop


{{-- Seo --}}
@section('title'){{$cate_detail->cate_name}}@stop

@section('description'){{$cate_detail->meta_desc}}@stop

@section('keywords'){{$cate_detail->meta_key}}@stop

@section('image'){{asset('public/upload/page/'.$page_favicon->page_image)}}@stop

@section('url'){{asset('/'.$cate_detail->cate_slug)}}@stop

@section('created_at'){{$cate_detail->created_at}}@stop

@section('updated_at'){{$cate_detail->updated_at}}@stop