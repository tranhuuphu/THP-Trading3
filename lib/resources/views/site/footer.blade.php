<footer>
    <!-- Footer Start-->
    <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Lorem ipsum dolor sit amet, nsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        <p class="info2">198 West 21th Street, Suite 721 New York,NY 10010</p>
                                        <p class="info2">Phone: +95 (0) 123 456 789 Cell: +95 (0) 123 456 789</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Popular post</h4>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="assets/img/gallery/footer_post1.png" alt="">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon  |  2 hours ago</p> 
                                </div>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="assets/img/gallery/footer_post2.png" alt="">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon  |  2 hours ago</p> 
                                </div>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="assets/img/gallery/footer_post3.png" alt="">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon  |  2 hours ago</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="banner">
                                <img src="assets/img/gallery/body_card4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>	
	<!-- Footer -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-5">
					<div class="footer-widget">
						<h3>Thông Tin</h3>
						<p style="text-transform: uppercase; font-weight: bold;">Công Ty TNHH Curie Việt Nam</p>
						<p>Địa chỉ ĐKKD: Thửa đất 1271, tờ bản đồ 19, khu phố An Hòa, Phường Hòa Lợi, Thị xã Bến Cát, Tỉnh Bình Dương</p>
						<p>Địa chỉ: KP An Hòa, Phường Hòa Lợi, Bến Cát, Bình Dương</p>
						<p>Đại diện pháp luật: Trần Hữu Hà</p>
						<p>Mã số thuế: 3702594617</p>
						<p>Email: <a href="mailto:curie.vn@gmail.com">curie.vn@gmail.com</a></p>
						<div class="footer-logo">
							<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
						</div>
						{{-- <ul class="footer-nav">
							<li><a href="javascript:void(0)">Privacy Policy</a></li>
							<li><a href="javascript:void(0)">Advertisement</a></li>
						</ul> --}}
						<div class="footer-copyright">
							<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="javascript:void(0)">Huu Phu - 0974 953 600</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6">
							<div class="footer-widget">
								<h3 class="footer-title">About Us</h3>
								<ul class="footer-links">
									@foreach($page as $p)
										<li><a href="{{asset('/').$p->page_slug.'.html'}}" title="{{$p->page_title}}">{{$p->page_title}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="footer-widget">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									@foreach($cate as $c)
										<li>
											<a href="{{asset('/'.$c->cate_slug)}}" title="{{$c->cate_name}}" style="text-transform: capitalize;">{{$c->cate_name}}</a>
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Địa Chỉ Google Maps</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1384.2437176126068!2d106.6632424141431!3d11.096043736983308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174cfc43bc7e2c5%3A0xe5bc84542907690d!2sC%C3%94NG%20TY%20TNHH%20CURIE%20VI%E1%BB%86T%20NAM!5e0!3m2!1svi!2s!4v1589384024258!5m2!1svi!2s" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

					</div>
				</div>

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

	<div class="hotline-phone-ring-wrap">
		<div class="hotline-phone-ring">
			<div class="hotline-phone-ring-circle"></div>
			<div class="hotline-phone-ring-circle-fill"></div>
			<div class="hotline-phone-ring-img-circle">
			<a href="tel:0987654321" class="pps-btn-img">
				<img src="{{asset('public/upload/site_icon/icon-call.png')}}" alt="Gọi điện thoại" width="50">
			</a>
			</div>
		</div>
		<div class="hotline-bar">
			<a href="tel:0974953600">
				<span class="text-hotline">0974 953 600</span>
			</a>
		</div>
	</div>
