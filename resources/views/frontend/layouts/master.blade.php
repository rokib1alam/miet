<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Mar 2025 07:52:51 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Edulearn | Responsive Education HTML5 Template</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('frontend.include.links')
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home1">
        <!--Preloader area start here-->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--Preloader area end here-->

        <!--Full width header Start-->
    @include('frontend.include.header')
        <!--Full width header End-->

		<!-- Slider Area Start -->
    @include('frontend.include.slider')
        <!-- Slider Area End -->

		<!-- Services Start -->
    @include('frontend.partials.services')
		<!-- Services End -->

		<!-- About Us Start -->
    @include('frontend.partials.about')
        <!-- About Us End -->

        <!-- Courses Start -->
    @include('frontend.partials.courses')
        <!-- Courses End -->

		<!-- Counter Up Section Start-->
    @include('frontend.partials.section')
        <!-- Counter Down Section End -->

        <!-- Events Start -->
    @include('frontend.partials.events')
        <!-- Events End -->

		<!-- Team Start -->
    @include('frontend.partials.team')
        <!-- Team End -->

        <!-- Calltoaction Start -->
        <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
            <div class="container">
                <div class="rs-cta-inner text-center">
                    <div class="sec-title mb-50 text-center">
                        <h2 class="white-color">WEB DESIGN &amp; DEVLOPMENT COURSE</h2>
                        <p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
                    </div>
				    <a class="cta-button" href="#">Join Now</a>
				</div>
            </div>
        </div>
        <!-- Calltoaction End -->

        <!-- Latest News Start -->
    @include('frontend.partials.latest_news')
        <!-- Latest News End -->

		<!-- Products Start -->
        {{-- <div id="rs-products" class="rs-products sec-spacer sec-color">
			<div class="container">
				<div class="sec-title mb-50 text-center">
					<h2>OUR PUBLICATIONS</h2>
					<p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
				</div>
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="4" data-md-device-nav="true" data-md-device-dots="true">
					<div class="product-item">
						<div class="product-img">
	                    	<a href="#">
	                        	<img src="frontend_assets/images/products/1.jpg" alt="" />
	                    	</a>
	                    </div>
                    	<h4 class="product-title"><a href="shop-details.html">Book Packages V2</a></h4>
                    	<span class="product-price">From: $85.00</span>
                    	<div class="product-btn">
                    		<a href="#">Add To Cart</a>
                    	</div>
					</div>
					<div class="product-item">
						<div class="product-img">
	                    	<a href="#">
	                        	<img src="images/products/2.jpg" alt="" />
	                    	</a>
	                    </div>
                    	<h4 class="product-title"><a href="shop-details.html">Smart Tabs X18</a></h4>
                    	<span class="product-price">From: $85.00</span>
                    	<div class="product-btn">
                    		<a href="#">Add To Cart</a>
                    	</div>
					</div>
					<div class="product-item">
						<div class="product-img">
	                    	<a href="#">
	                        	<img src="images/products/3.jpg" alt="" />
	                    	</a>
	                    </div>
                    	<h4 class="product-title"><a href="shop-details.html">Modern Bags L17</a></h4>
                    	<span class="product-price">From: $85.00</span>
                    	<div class="product-btn">
                    		<a href="#">Add To Cart</a>
                    	</div>
					</div>
					<div class="product-item">
						<div class="product-img">
	                    	<a href="#">
	                        	<img src="images/products/4.jpg" alt="" />
	                    	</a>
	                    </div>
                    	<h4 class="product-title"><a href="shop-details.html">Internet CC Camera</a></h4>
                    	<span class="product-price">From: $85.00</span>
                    	<div class="product-btn">
                    		<a href="#">Add To Cart</a>
                    	</div>
					</div>
				</div>
				<div class="view-btn">
					<a href="#">VIEW  ALL</a>
				</div>
			</div>
		</div> --}}

		<!-- Newslatter Start -->
<!--
        <div id="rs-newslatter" class="rs-newslatter sec-black sec-spacer">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-md-6">
                        <h3 class="newslatter-title">STAY CONNECTED WITH US</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <form class="newslatter-form">
                            <input type="text" class="form-input" placeholder="Enter Your Email Address">
                            <button type="submit" class="form-button">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
-->

		<!-- Testimonial Start -->
        {{-- <div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
					<h2 class="white-color">WHAT PEOPLE SAYS</h2>
					<p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
				</div>
				<div class="row">
			        <div class="col-md-12">
						<div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
			                <div class="testimonial-item">
			                    <div class="testi-img">
			                        <img src="frontend_assets/images/testimonial/1.jpg" alt="Jhon Smith">
			                    </div>
			                    <div class="testi-desc">
			                        <h4 class="testi-name">Luise Henrikes</h4>
			                        <p>
			                            Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
			                        </p>
			                    </div>
			                </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="frontend_assets/images/testimonial/2.jpg" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="frontend_assets/images/testimonial/3.jpg" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="frontend_assets/images/testimonial/4.jpg" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="frontend_assets/images/testimonial/5.jpg" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
			            </div>
			        </div>
			    </div>
			</div>
        </div> --}}
        <!-- Testimonial End -->

        <!-- Partner Start -->
        {{-- <div id="rs-partner" class="rs-partner pt-70 pb-70">
            <div class="container">
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <a href="#"><img src="frontend_assets/images/partner/1.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="frontend_assets/images/partner/2.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="frontend_assets/images/partner/3.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="frontend_assets/images/partner/4.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="frontend_assets/images/partner/5.png" alt="Partner Image"></a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Partner End -->

        <!-- Footer Start -->
            @include('frontend.include.footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>

		{{-- <!-- Canvas Menu start -->
        <nav class="right_menu_togle">
        	<div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
            <div class="canvas-logo">
                <a href="index-2.html"><img src="images/logo-white.png" alt="logo"></a>
            </div>
        	<ul class="sidebarnav_menu list-unstyled main-menu">
                <!--Home Menu Start-->
                <li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="index-2.html">Home One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index2.html">Home Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index3.html">Home Three<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index4.html">Home Four<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Home Menu End-->

                <!--About Menu Start-->
                <li class="menu-item-has-children"><a href="#">About Us</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="index-2.html">About One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index2.html">About Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index3.html">About Three<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--About Menu End-->

                <!--Pages Menu Start-->
                <li class="menu-item-has-children"><a href="#">Pages</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="teachers.html">Teachers<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="teachers-without-filter.html">Teachers Without Filter<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="teachers-single.html">Teachers Single<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery.html">Gallery One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery2.html">Gallery Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery3.html">Gallery Three<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop-details.html">Shop Details<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="cart.html">Cart<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="error-404.html">Error 404<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Pages Menu End-->

                <!--Courses Menu Star-->
                <li class="menu-item-has-children"><a href="#">Courses</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="courses.html">Courses<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="courses2.html">Courses Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="courses-details.html">Courses Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Courses Menu End-->

                <!--Events Menu Star-->
                <li class="menu-item-has-children"><a href="#">Events</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="events.html">Events<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="events-details.html">Events Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Events Menu End-->

                <!--blog Menu Star-->
                <li class="menu-item-has-children"><a href="#">Blog</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="blog.html">Blog<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="blog-details.html">Blog Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--blog Menu End-->
                <li><a href="contact.html">Contact<span class="icon"></span></a></li>
        	</ul>
            <div class="search-wrap">
                <label class="screen-reader-text">Search for:</label>
                <input type="search" placeholder="Search..." name="s" class="search-input" value="">
                <button type="submit" value="Search"><i class="fa fa-search"></i></button>
            </div>
        </nav>
        <!-- Canvas Menu end -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Computer Technology" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End --> --}}

    </body>
        <!-- Search Modal End -->
        @include('frontend.include.script')

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Mar 2025 07:54:36 GMT -->
</html>
