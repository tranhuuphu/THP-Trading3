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
                        <li><a href="#">{{$p->page_title}}</a></li>
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
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="./club.html">Club</a></li>
            <li><a href="./schedule.html">Schedule</a></li>
            <li><a href="./result.html">Results</a></li>
            <li><a href="#">Sport</a></li>
            <li><a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="./blog.html">Blog</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                    <li><a href="#">Schedule</a></li>
                    <li><a href="#">Results</a></li>
                </ul>
            </li>
            <li><a href="./contact.html">Contact Us</a></li>
        </ul>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
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
        <div class="header__nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{asset('')}}"><img src="public/upload/img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <ul class="main-menu">
                                <li class="active"><a href="{{asset('')}}">Home</a></li>
                                @foreach($cate as $c)

                                    <li>
                                        <a href="{{$c->cate_slug}}" title="{{$c->cate_name}}">{{$c->cate_name}}
                                            <i class='fa fa-angle-down' aria-hidden='true'></i>
                                                
                                        </a>
                                        <ul class="dropdown">
                                            @foreach($cate2 as $c2)
                                                @if($c2->parent_cate_id == $c->cate_id)
                                                    <li><a href="./blog.html">{{$c2->cate_name}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>

                                    </li>

                                @endforeach

                                {{-- <li class=""><a href="#">Pages2 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="./blog.html">Blog</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="#">Schedule</a></li>
                                        <li><a href="#">Results</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href="./contact.html">Contact Us</a></li> --}}
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