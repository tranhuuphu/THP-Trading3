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


                            <nav aria-label="Page navigation example">
								<ul class="pagination">
									<?php echo $post_cate->links(); ?>
								</ul>
							</nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title">
                        {{-- <h3>Adv <span></span></h3> --}}
                    </div>
                    {{-- <div class="follow-links">
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
                    </div> --}}
                    <style type="text/css">
                    	.post h5{
                    		font-weight: bold;
                    		padding-bottom: 15px;
                    	}
                    </style>
                    <div class="section-title">
						<h2>Đọc Nhiều</h2>
					</div>
					@foreach($most_read as $mr)

						<div class="post post-widget">
							<h5 class="post-title"><a href="{{asset('/'.$mr->cate_slug.'/'.$mr->post_slug.'-'.$mr->post_id.'.html')}}" title="{{$mr->post_title}}">{{$mr->post_title}}</a></h5>
							<div class="media">
								<img src="{{asset('public/upload/post/'.$mr->post_image)}}" width="40%" class="mr-3" alt="{{$mr->post_title}}">
								<div class="media-body">
									{{-- <h5 class="mt-0">{{$mr->post_intro}}</h5> --}}
									<p>{{$mr->post_intro}}</p>
								</div>
							</div>

						</div>
						<hr>

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