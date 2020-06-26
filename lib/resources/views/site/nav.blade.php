    
    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="search-btn search-switch">
            <i class="fa fa-search"></i>
        </div>
        <div class="header__top--canvas">
            <div class="ht-info">
                <ul>
                    <?php echo date("jS F, Y", strtotime("11.12.10"));?>
                    @foreach($page as $p)
                        <li><a href="{{$p->page_slug}}" title="{{$p->page_title}}">{{$p->page_title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="ht-links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <ul class="main-menu mobile-menu">



            @foreach($cate as $c)
            <li><a href="{{$c->cate_slug}}" title="{{$c->cate_name}}">{{$c->cate_name}}</a>
                <?php
                    $sub_exist = DB::table('cate2')->where('parent_cate_id', $c->cate_id)->first();
                ?>
                @if(isset($sub_exist))
                    <ul class="dropdown">
                @endif

                    @foreach($cate2 as $c2)
                        @if($c2->parent_cate_id == $c->cate_id)
                            <li><a href="{{$c->cate_slug}}" title="{{$c->cate_name}}">{{$c2->cate_name}}</a></li>
                        @endif
                    @endforeach
                @if(isset($sub_exist))
                    </ul>
                @endif
            </li>
            @endforeach
            {{-- @endforeach --}}
            <li><a href="#">Contact Us</a></li>
        </ul>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section ">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ht-info">
                            <ul>
                                <li>
                                    <?php echo date("jS F, Y", strtotime("11.12.10"));?>
                                </li>
                                @foreach($page as $p)
                                    <li><a href="{{asset('/'.$p->page_slug.'.html')}}" title="{{$p->page_title}}">{{$p->page_title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ht-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{asset('')}}"><img src="{{asset('public/upload/page/').'/'.$page_favicon->page_image}}" alt="" style="height: 40px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <ul class="main-menu">
                                <li class="active"><a href="{{asset('')}}">Home</a></li>
                                @foreach($cate as $c)

                                    <li>
                                        <a href="{{$c->cate_slug}}" title="{{$c->cate_name}}">{{$c->cate_name}}
                                            <?php
                                                $sub_exist = DB::table('cate2')->where('parent_cate_id', $c->cate_id)->first();
                                            ?>
                                            @if(isset($sub_exist))
                                                <i class='fa fa-angle-down' aria-hidden='true'></i>
                                            @endif
                                                
                                        </a>
                                        @if(isset($sub_exist))
                                            <ul class="dropdown">
                                        
                                            @foreach($cate2 as $c2)
                                                @if($c2->parent_cate_id == $c->cate_id)
                                                    <li><a href="{{$c2->cate_slug}}" title="{{$c2->cate_name}}">{{$c2->cate_name}}</a></li>
                                                @endif
                                            @endforeach
                                        
                                            </ul>
                                        @endif

                                    </li>


                                @endforeach
                            </ul>
                            <div class="nm-right search-switch">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="canvas-open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->