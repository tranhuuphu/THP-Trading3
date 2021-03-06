<!DOCTYPE html>
<html ... xmlns:fb="http://ogp.me/ns/fb#" lang="en">
{{-- <html lang="en"> --}}
<head>
	<base href="{{asset('')}}">
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="fb:app_id" content="{}" />

	{{-- Yoast Seo --}}
	<link rel="alternate" href="@yield('url')" hreflang="vi-vn"/>
	<meta rel="canonical" href="@yield('url')"/>

	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')" />
	<meta name="keywords" content="@yield('keywords')" />
	<meta name="title" content="@yield('title')" />
	<meta name="robots" content="index,follow,all">


	<meta name="author" content=""/>
	<meta name="copyright" content="{{asset('/')}}" />



	<!-- Schema.org markup for Google+ -->
	<meta name="google-site-verification" content="">
	<meta itemprop="name" content="@yield('title')">
	<meta itemprop="image" content="@yield('image')">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="article">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="@yield('title')">
	<meta name="twitter:description" content="@yield('description')">
	<meta name="twitter:creator" content="{{asset('/')}}">
	<meta name="twitter:image" content="@yield('image')">

	<!-- Open Graph data -->
	<meta property="og:type" content="article" />
	<meta property="og:site_name" content="" />
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:url" content="@yield('url')" />
	<meta property="og:image" content="@yield('image')" />
	<meta property="og:description" content="@yield('description')" />
	<meta property="og:locale" content="vi_VN" />
	<meta name="format-detection" content="telephone=0963214487">
	<meta name="thumbnail" content="@yield('image')" />    


	<meta property="og:image:secure_url" content="@yield('image')" />


	<meta property="fb:app_id" content="">

	<meta name="resource-type" content="Document">
	<meta name="distribution" content="Global">
	<meta property="fb:pages" content="">
	<meta property="article:author" content="">
	<meta property="article:publisher" content="Link">
	<link href="{{asset('public/upload/page/'.$page_favicon->page_image)}}" type="image/x-icon/png" rel="shortcut icon" />

	<meta content="news" itemprop="genre" name="medium"/>
	<meta content="vi-VN" itemprop="inLanguage"/>
	<meta content="" itemprop="articleSection"/>
	<meta content="@yield('created_at')" itemprop="datePublished" name="pubdate"/>
	<meta content="@yield('updated_at')" itemprop="dateModified" name="lastmod"/>
	<meta content="@yield('created_at')" itemprop="dateCreated"/>

	<meta name="geo.placename" content=""/>
	<meta name="geo.region" content=""/>
	<meta name="geo.position" content=""/>
	<meta name="ICBM" content=""/>




    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="audience" content="General">
    <meta http-equiv="content-language" content="vi" />
    <meta http-equiv="REFRESH" content="1800">    
    <meta name="revisit-after" content="1 days">



	<link rel="stylesheet" type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css">
	<!--=======================================================================-->

	{{-- <link rel="stylesheet" type="text/css" href="public/vendor/font-awesome/5.13/css/all.min.css"> --}}
	<!--=======================================================================-->

	<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="public/site_asset/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/site_asset/css/owl.carousel.min.css" type="text/css">
    {{-- <link rel="stylesheet" href="public/site_asset/css/magnific-popup.css" type="text/css"> --}}
    <link rel="stylesheet" href="public/site_asset/css/slicknav.min.css?v=<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" href="public/site_asset/css/style.css?v=<?php echo time(); ?>" type="text/css">

    @yield('style')
    
	<style type="text/css">
		@yield('style_code')
		.hotline-phone-ring-wrap {
		  position: fixed;
		  bottom: 0;
		  left: 0;
		  z-index: 999999;
		}
		.hotline-phone-ring {
		  position: relative;
		  visibility: visible;
		  background-color: transparent;
		  width: 110px;
		  height: 110px;
		  cursor: pointer;
		  z-index: 11;
		  -webkit-backface-visibility: hidden;
		  -webkit-transform: translateZ(0);
		  transition: visibility .5s;
		  left: 0;
		  bottom: 0;
		  display: block;
		}
		.hotline-phone-ring-circle {
			width: 85px;
		  height: 85px;
		  top: 10px;
		  left: 10px;
		  position: absolute;
		  background-color: transparent;
		  border-radius: 100%;
		  border: 2px solid #e60808;
		  -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
		  animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
		  transition: all .5s;
		  -webkit-transform-origin: 50% 50%;
		  -ms-transform-origin: 50% 50%;
		  transform-origin: 50% 50%;
		  opacity: 0.5;
		}
		.hotline-phone-ring-circle-fill {
			width: 55px;
		  height: 55px;
		  top: 25px;
		  left: 25px;
		  position: absolute;
		  background-color: rgba(230, 8, 8, 0.7);
		  border-radius: 100%;
		  border: 2px solid transparent;
		  -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
		  animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
		  transition: all .5s;
		  -webkit-transform-origin: 50% 50%;
		  -ms-transform-origin: 50% 50%;
		  transform-origin: 50% 50%;
		}
		.hotline-phone-ring-img-circle {
			background-color: #e60808;
			width: 33px;
		  height: 33px;
		  top: 37px;
		  left: 37px;
		  position: absolute;
		  background-size: 20px;
		  border-radius: 100%;
		  border: 2px solid transparent;
		  -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
		  animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
		  -webkit-transform-origin: 50% 50%;
		  -ms-transform-origin: 50% 50%;
		  transform-origin: 50% 50%;
		  display: -webkit-box;
		  display: -webkit-flex;
		  display: -ms-flexbox;
		  display: flex;
		  align-items: center;
		  justify-content: center;
		}
		.hotline-phone-ring-img-circle .pps-btn-img {
			display: -webkit-box;
		  display: -webkit-flex;
		  display: -ms-flexbox;
		  display: flex;
		}
		.hotline-phone-ring-img-circle .pps-btn-img img {
			width: 20px;
			height: 20px;
		}
		.hotline-bar {
		  position: absolute;
		  background: rgba(230, 8, 8, 0.75);
		  height: 40px;
		  width: 200px;
		  line-height: 40px;
		  border-radius: 3px;
		  padding: 0 10px;
		  background-size: 100%;
		  cursor: pointer;
		  transition: all 0.8s;
		  -webkit-transition: all 0.8s;
		  z-index: 9;
		  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
		  border-radius: 50px !important;
		  /* width: 175px !important; */
		  left: 33px;
		  bottom: 37px;
		}
		.hotline-bar > a {
		  color: #fff;
		  text-decoration: none;
		  font-size: 15px;
		  font-weight: bold;
		  text-indent: 50px;
		  display: block;
		  letter-spacing: 1px;
		  line-height: 40px;
		  font-family: Arial;
		}
		.hotline-bar > a:hover,
		.hotline-bar > a:active {
		  color: #fff;
		}
		@-webkit-keyframes phonering-alo-circle-anim {
		  0% {
		    -webkit-transform: rotate(0) scale(0.5) skew(1deg);
		    -webkit-opacity: 0.1;
		  }
		  30% {
		    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
		    -webkit-opacity: 0.5;
		  }
		  100% {
		    -webkit-transform: rotate(0) scale(1) skew(1deg);
		    -webkit-opacity: 0.1;
		  }
		}
		@-webkit-keyframes phonering-alo-circle-fill-anim {
		  0% {
		    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
		    opacity: 0.6;
		  }
		  50% {
		    -webkit-transform: rotate(0) scale(1) skew(1deg);
		    opacity: 0.6;
		  }
		  100% {
		    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
		    opacity: 0.6;
		  }
		}
		@-webkit-keyframes phonering-alo-circle-img-anim {
		  0% {
		    -webkit-transform: rotate(0) scale(1) skew(1deg);
		  }
		  10% {
		    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
		  }
		  20% {
		    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
		  }
		  30% {
		    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
		  }
		  40% {
		    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
		  }
		  50% {
		    -webkit-transform: rotate(0) scale(1) skew(1deg);
		  }
		  100% {
		    -webkit-transform: rotate(0) scale(1) skew(1deg);
		  }
		}
		@media (max-width: 768px) {
		  .hotline-bar {
		    display: none;
		  }
		}

		
       select, input, label{
            outline: none !important;
            box-shadow: none !important;
        }
        label{
            font-weight: bold;
        }
        form, input, textarea, button, .form-group{
            border-radius: none !important;
        }
        
		.form-group{
			margin-bottom: 0 !important;
		}
		button, form {
		    background-color: Transparent;
		    background-repeat:no-repeat;
		    border: none;
		    cursor:pointer;
		    overflow: hidden;
		    outline:none;
		    border-radius: 0;
		}
		button:focus {
          box-shadow: inset 0 -1px 0 #ddd;
          outline:none;
        }
        
	</style>

</head>
<body>
	<div id="preloder">
        <div class="loader"></div>
    </div>

	
	@include('site.nav')
	@if(!isset($page_result))
		@include('site.breadcrum')
	@endif
	@yield('content')

	{{-- Footer @ Top --}}
	@include('site.footer')
	<!-- Footer -->

	<!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="fa fa-close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
            <button type="submit" class="btn btn-info" style="margin-right: 12px;"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <!-- Search model end -->

	<!--=======================================================================-->	
	<script src="public/vendor/jquery/jquery-3.4.1.min.js"></script>

	<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--=======================================================================-->
	{{-- <script src="public/site_asset/js/main.js"></script> --}}

    {{-- <script src="public/site_asset/js/jquery.magnific-popup.min.js"></script> --}}
    <script src="public/site_asset/js/jquery.slicknav.js?v=<?php echo time(); ?>"></script>
    <script src="public/site_asset/js/owl.carousel.min.js"></script>
    <script src="public/site_asset/js/jquery.scrollUp.min.js"></script>
    <script src="public/site_asset/js/main.js?v=<?php echo time(); ?>"></script>


    @yield('script')

    <style type="text/css">
    	#scrollUp{background:#d6d6d6;height:50px;width:50px;right:31px;bottom:48px;color:#000;font-size:20px;text-align:center;border-radius:6%;line-height:48px;border:2px solid transparent}
    	#scrollUp:hover{background: #c3ccd9}
    </style>
    <script type="text/javascript">
    	$.scrollUp({
	      scrollName: 'scrollUp', // Element ID
	      topDistance: '500', // Distance from top before showing element (px)
	      topSpeed: 300, // Speed back to top (ms)
	      animation: 'fade', // Fade, slide, none
	      animationInSpeed: 200, // Animation in speed (ms)
	      animationOutSpeed: 200, // Animation out speed (ms)
	      scrollText: '<i class="fa fa-long-arrow-up" aria-hidden="true"></i>', // Text for element
	      activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	    });
    </script>






	<script async src="https://cse.google.com/cse.js?cx=018266326217034628598:uchmus2ba3r"></script>


	@yield('script_code')

	  <!-- Load Facebook SDK for JavaScript -->
  

</body>
</html>