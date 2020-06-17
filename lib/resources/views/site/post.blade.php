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
                        <div class="col-md-6">
                            <div class="news-item popular-item set-bg" data-setbg="public/upload/img/news/popular-b.jpg">
                                <div class="ni-tag tenis">Tenis</div>
                                <div class="ni-text">
                                    <h5><a href="#">England reach World Cup last 16 with hard-fought win over
                                            Argentina</a></h5>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                        <li><i class="fa fa-edit"></i> 3 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="ni-pic">
                                    <img src="public/upload/img/news/ln-1.jpg" alt="">
                                </div>
                                <div class="ni-text">
                                    <h5><a href="#">There’s a great history of the winner Sandia</a></h5>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                        <li><i class="fa fa-edit"></i> 3 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="ni-pic">
                                    <img src="public/upload/img/news/ln-2.jpg" alt="">
                                </div>
                                <div class="ni-text">
                                    <h5><a href="#">It’ll be a tough game and a physical game</a></h5>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                        <li><i class="fa fa-edit"></i> 3 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="ni-pic">
                                    <img src="public/upload/img/news/ln-3.jpg" alt="">
                                </div>
                                <div class="ni-text">
                                    <h5><a href="#">If we don’t score we can’t get frustrated</a></h5>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                        <li><i class="fa fa-edit"></i> 3 Comment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-item popular-item set-bg" data-setbg="public/upload/img/news/popular-b.jpg">
                                <div class="ni-tag football">Football</div>
                                <div class="ni-text">
                                    <h5><a href="#">We are playing history and Argentina at the World Cup, says Phil
                                            Neville</a></h5>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                        <li><i class="fa fa-edit"></i> 3 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="ni-pic">
                                    <img src="public/upload/img/news/ln-5.jpg" alt="">
                                </div>
                                <div class="ni-text">
                                    <h5><a href="#">Le Havre does have a growing fan club</a></h5>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                        <li><i class="fa fa-edit"></i> 3 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="ni-pic">
                                    <img src="public/upload/img/news/ln-6.jpg" alt="">
                                </div>
                                <div class="ni-text">
                                    <h5><a href="#">It will be hard to break them down</a></h5>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                        <li><i class="fa fa-edit"></i> 3 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="ni-pic">
                                    <img src="public/upload/img/news/ln-7.jpg" alt="">
                                </div>
                                <div class="ni-text">
                                    <h5><a href="#">We’ve never seen them as organised </a></h5>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                        <li><i class="fa fa-edit"></i> 3 Comment</li>
                                    </ul>
                                </div>
                            </div>
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

                </div>
            </div>
        </div>
    </section>
    <!-- Popular News Section End -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container" >
			<!-- row -->
			<div class="row">
				<div class="col-md-8" >
					<div class="row" >

									
						<!-- post -->
						@foreach($post_2 as $p_2)
							<div class="col-md-6" >
								<div class="post">
									<a class="post-img img-carbox6" href="{{asset('/'.$cate_detail->cate_slug.'/'.$p_2->post_slug.'-'.$p_2->post_id.'.html')}}" title="{{$p_2->post_title}}"><img src="{{asset('public/upload/post/'.$p_2->post_image)}}" alt="{{$p_2->post_title}}"></a>
									<div class="post-body">
										<div class="post-meta">
											{{-- <a class="post-category cat-2" href="javascript:void(0)">JavaScript</a> --}}
											<span class="post-date"><?php echo substr($p_2->created_at, 0, 7) ?></span>
										</div>
										<h3 class="post-title"><a href="{{asset('/'.$cate_detail->cate_slug.'/'.$p_2->post_slug.'-'.$p_2->post_id.'.html')}}" title="{{$p_2->post_title}}">{{$p_2->post_title}}</a></h3>
									</div>
								</div>
							</div>
						@endforeach
						<!-- /post -->

						<hr style="border-bottom: 2px solid #000">
						
						<div class="clearfix visible-md visible-lg" ></div>
						
						<!-- ad -->
						<div class="col-md-12 visible-md visible-sm visible-xs" style="height: 0px !important">
							<div class="section-row">
								<a href="javascript:void(0)">
									<img class="img-responsive center-block" src="./img/ad-2.jpg" alt="" width="100%">
								</a>
							</div>
						</div>
						<!-- ad -->
						
						<style>
							.post-singer {
							  overflow: auto;
							  padding-bottom: 25px;
							  padding-left: 15px;
							  padding-right: 15px;
							  margin-bottom: 10px;
							  border-bottom: 1px dashed #b9bbbd;
							}
							.post-singer a img:hover{
								opacity: 0.85;
								transition: 0.3s;
							}

							.img2 {
							  float: left;
							  padding: 0 15px 0 0;
							  margin-top: 5px;
							  width: 30%;
							}
							.intro{
								font-family: 'Nunito' !important;
								font-size: 17px;
								text-align: justify;
							}
							.title-2{
								padding: 5px 15px;
								font-family: 'Nunito Sans' !important;
								font-size: 20px;
								font-weight: bold;
								color: #434343;
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
						<!-- post 3 -->
						@foreach($post_3 as $p_3)
							<div class="col-md-12">
								{{-- Post Singer --}}
								<div style="background: #fff">
									<div class="title-2">
										<a href="{{asset('/'.$cate_detail->cate_slug.'/'.$p_3->post_slug.'-'.$p_3->post_id.'.html')}}" title="{{$p_3->post_title}}">{{$p_3->post_title}}</a>
									</div>
									<div class="post-singer">
									  <a href="{{asset('/'.$cate_detail->cate_slug.'/'.$p_3->post_slug.'-'.$p_3->post_id.'.html')}}" title="{{$p_3->post_title}}">
									  	<img class="img2" src="{{asset('public/upload/post/'.$p_3->post_image)}}" alt="{{$p_3->post_title}}" height="auto">
									  </a>
									  <div class="intro">{{$p_3->post_intro}}</div>
									</div>
								</div>
									
								{{-- Post Singer --}}

								
							</div>
						@endforeach
						<!-- /post -->
						

						
						<div class="col-md-12">
							<div class="section-row">
								{{ $post_cate->links() }}
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<!-- ad -->
					<div class="aside-widget text-center mt-3" style="background: #ffffff">
						<a href="javascript:void(0)" style="display: inline-block;margin: auto;">
							Adv
							<img class="img-responsive" src="./img/ad-1.jpg" alt="" width="100%">
						</a>
					</div>
					<!-- /ad -->
					
					<!-- post widget -->
					<div class="aside-widget">
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
					<!-- /post widget -->
					
					<!-- catagories -->
					<div class="aside-widget">
						<div class="section-title">
							<h2>Chuyên Mục</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach($cate as $c)
									<li><a href="{{asset('/'.$c->cate_slug)}}" title="{{$c->cate_name}}" class="cat-1">{{$c->cate_name}}<span>
										<?php
											echo $count = DB::table('post2')->where('post_cate_id', $c->cate_id)->count();
										?>
									</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /catagories -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->



@stop


{{-- Seo --}}
@section('title'){{$cate_detail->cate_name}}@stop

@section('description'){{$cate_detail->meta_desc}}@stop

@section('keywords'){{$cate_detail->meta_key}}@stop

@section('image'){{asset('public/upload/page/'.$page_favicon->page_image)}}@stop

@section('url'){{asset('/'.$cate_detail->cate_slug)}}@stop

@section('created_at'){{$cate_detail->created_at}}@stop

@section('updated_at'){{$cate_detail->updated_at}}@stop