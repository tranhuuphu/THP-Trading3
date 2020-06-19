<!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg" style="border-top: 3px solid #f48024; margin-top: 20px;">
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
