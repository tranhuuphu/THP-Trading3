@extends('site.master')

@section('content')



{{--     <section class="hero-section set-bg" data-setbg="public/upload/img/hero/hero-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hs-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hs-text">
                                        <h4>30 september 2019 / 9:00 GMT+0000</h4>
                                        <h2>Airrosten VS Lerenort in London</h2>
                                        <a href="#" class="primary-btn">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Hero Section End -->


    <!-- Hero Section Begin array_shift -->
    <?php
        $feat_1 = array_shift($featured);
        $feat_2 = array_slice($featured, 0, 2);

        $feat_3 = array_pop($featured);

    ?>

    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="hero__inside__item hero__inside__item--wide set-bg"
                                data-setbg="public/upload/post/{{$feat_1->post_image}}" aria-label="{{$feat_1->post_title}}">
                                <div class="hero__inside__item__text">

                                    <div class="hero__inside__item--text">

                                        <a href="{{asset($feat_1->cate_slug.'/'.$feat_1->post_slug.'-'.$feat_1->post_id.'.html')}}" title="{{$feat_1->post_title}}"><h4>{{$feat_1->post_title}}</h4></a>
                                        <ul class="widget">
                                            <li>{{$feat_1->post_intro}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-0">
                            @foreach($feat_2 as $f2)
                                <div class="hero__inside__item hero__inside__item--small set-bg"
                                    data-setbg="public/upload/post/{{$f2->post_image}}" aria-label="{{$feat_1->post_title}}">
                                    <div class="hero__inside__item__text">
                                        
                                        <div class="hero__inside__item--text">
                                            
                                            <a href="{{asset($f2->cate_slug.'/'.$f2->post_slug.'-'.$f2->post_id.'.html')}}" title="{{$f2->post_title}}"><h5>{{$f2->post_title}}</h5></a>
                                            <ul class="widget">
                                                <li>{{$f2->post_intro}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-lg-3 col-md-6  p-0">
                            <div class="hero__inside__item set-bg" data-setbg="public/upload/post/{{$feat_3->post_image}}" aria-label="{{$feat_3->post_title}}">
                                <div class="hero__inside__item__text">

                                    <div class="hero__inside__item--text">

                                        <a href="{{asset($feat_3->cate_slug.'/'.$feat_3->post_slug.'-'.$feat_3->post_id.'.html')}}" title="{{$feat_3->post_title}}"><h5>{{$feat_3->post_title}}</h5></a>


                                        <ul class="widget">
                                            <li>{{$feat_3->post_intro}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Hero Section End -->
    <style type="text/css">
        .heading {
          line-height: 1.5;
          margin: 0;
          padding: 0;
          font-size: 20px;
          font-weight: 300;
        }
        .media-body p{
            padding: 1rem 0;
            line-height: 1.5em;
        }

    </style>
    {{-- Intro --}}
    <section class="section bg-light" style="background-color: #f8f9fa; padding: 3em 0">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 element-animate ">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><i class="fa fa-bell-o fa-3x" aria-hidden="true"></i></div>
              <div class="media-body">
                <h3 class="heading">Modern Design</h3>
                
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>  

          </div>
          <div class="col-md-6 col-lg-4 element-animate ">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><i class="fa fa-leaf fa-3x" aria-hidden="true"></i></div>
              <div class="media-body">
                <h3 class="heading">Build With Love</h3>
                
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div> 

          </div>
          <div class="col-md-6 col-lg-4 element-animate ">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><i class="fa fa-bolt fa-3x" aria-hidden="true"></i></div>
              <div class="media-body">
                <h3 class="heading">Fast Loading</h3>
                
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div> 

          </div>
        </div>
      </div>
    </section>



    <!-- Soccer Section Recent Begin -->
    <section class="soccer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Bài Viết <span>Gần Đây</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($recent as $ft)
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="soccer-item set-bg" data-setbg="{{asset('/public/upload/post/'.$ft->post_image)}}" alt = "{{$ft->post_title}}">
                        @foreach($cate3 as $ct)
                            @if($ct->cate_id == $ft->post_cate_id)
                                <div class="si-tag">{{$ct->cate_name}}</div>
                                <div class="si-text">
                                    <h5><a href="{{asset('/'.$ct->cate_slug.'/'.$ft->post_slug.'-'.$ft->post_id.'.html')}}" title="{{$ft->post_title}}">{{$ft->post_title}}</a></h5>
                                    <ul>
                                        {{-- <li><i class="fa fa-calendar"></i> May 19, 2019</li> --}}
                                        {{-- <li><i class="fa fa-edit"></i> 3 Comment</li> --}}
                                    </ul>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Soccer Section End -->

    <!-- Latest Section Begin -->
    <section class="latest-section">

        <div class="container">
            @foreach($cate as $ct)
                <?php
                    $id = $ct->cate_id;
                    $sub_test = DB::table('cate2')->where('parent_cate_id', $id)->first();
                    $sub = DB::table('cate2')->where('parent_cate_id', $id)->get();
                    if($sub_test != null){
                        foreach($sub as $s){
                            $sub_cate_id[] = $s->cate_id;
                        }

                        $data_cate = DB::table('cate2')->join('post2','cate2.cate_id','=','post2.post_cate_id')->whereIn('post_cate_id', $sub_cate_id)->take(5)->get();

                    }else{
                        
                        $data_cate = DB::table('cate2')->join('post2','cate2.cate_id','=','post2.post_cate_id')->where('post_cate_id', $id)->take(5)->get();
                    }

                    $data_cate_i = $data_cate->shift();
                    $data_cate_ii = $data_cate->all();
                ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title latest-title">
                            <h3><span><a href="{{asset('/'.$ct->cate_slug)}}">{{$ct->cate_name}}</a></span></h3>
                            <ul>
                                @foreach($cate2 as $ct2)
                                    @if($ct2->parent_cate_id == $ct->cate_id)
                                        <li><a href="{{asset('/'.$ct2->cate_slug)}}">{{$ct2->cate_name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="news-item left-news">
                                    <div class="ni-pic set-bg" data-setbg="{{asset('public/upload/post/'.$data_cate_i->post_image)}}" alt = '{{$data_cate_i->post_title}}'>
                                        {{-- <div class="ni-tag">Soccer</div> --}}
                                    </div>
                                    <div class="ni-text">
                                        <h4><a href="{{asset('/'.$data_cate_i->cate_slug.'/'.$data_cate_i->post_slug.'-'.$data_cate_i->post_id.'.html')}}" title="{{$data_cate_i->post_title}}">{{$data_cate_i->post_title}}</a></h4>
                                        {{-- <ul>
                                            <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                            <li><i class="fa fa-edit"></i> 3 Comment</li>
                                        </ul> --}}
                                        <p>{{$data_cate_i->post_intro}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @foreach($data_cate_ii as $d_ii)
                                    <div class="news-item">
                                        <div class="ni-pic">
                                            <img src="{{asset('public/upload/post/'.$d_ii->post_image)}}" alt="{{$d_ii->post_title}}">
                                        </div>
                                        <div class="ni-text">
                                            <h5><a href="{{asset('/'.$d_ii->cate_slug.'/'.$d_ii->post_slug.'-'.$d_ii->post_id.'.html')}}" title="{{$d_ii->post_title}}">{{$d_ii->post_title}}</a></h5>
                                            <ul>
                                                {{-- <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                                <li><i class="fa fa-edit"></i> 3 Comment</li> --}}
                                                <p>{{$d_ii->post_intro}}</p>
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

                        <div class="aside-widget text-center">
                            <a href="#" style="display: inline-block;margin: auto;">
                                <img class="img-responsive" src="./public/upload/img/ad-1.jpg" alt="" width="100%">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>
    <!-- Latest Section End -->






@stop

{{-- Seo --}}
@section('title'){{$home_meta->page_title}}@stop

@section('description'){{$home_meta->meta_desc}}@stop

@section('keywords'){{$home_meta->meta_key}}@stop

@section('image'){{asset('public/upload/page/'.$home_meta->page_image)}}@stop

@section('url'){{asset('/')}}@stop

@section('created_at'){{$home_meta->created_at}}@stop

@section('updated_at'){{$home_meta->updated_at}}@stop

@section('script_code')

@stop
@section('style_code')
@stop