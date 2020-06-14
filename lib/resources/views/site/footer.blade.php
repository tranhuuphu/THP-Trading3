<!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="fs-logo">
                        <div class="logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li><i class="fa fa-envelope"></i> Info.colorlib@gmail.com</li>
                            <li><i class="fa fa-copy"></i> +(12) 345 6789 10</li>
                            <li><i class="fa fa-thumb-tack"></i> 40 Baria Sreet 133/2 New York City, United State</li>
                        </ul>
                        <div class="fs-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-tumblr"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fs-widget">
                        <h4>Top Club</h4>
                        <ul class="fw-links">
                            @foreach($page as $p)
								<li><a href="{{asset('/').$p->page_slug.'.html'}}" title="{{$p->page_title}}">{{$p->page_title}}</a></li>
							@endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="fs-widget">
                        <h4>Top Club</h4>

                        <div class="fw-item">
                            <h5><a href="#">England win shows they have the spark to go far at World Cup</a></h5>
                            <ul>
                                <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                <li><i class="fa fa-edit"></i> 3 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-item">
                            <h5><a href="#">Sri Lanka v Australia: Cricket World Cup 2019 – live!</a></h5>
                            <ul>
                                <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                <li><i class="fa fa-edit"></i> 3 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright-option">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        <div class="co-widget">
                            <ul>
                                <li><a href="#">Copyright notification</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
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
