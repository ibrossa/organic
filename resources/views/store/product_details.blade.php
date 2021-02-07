
@extends('layouts.app')
@section('content')
			<section class="breadcrumb-area" style="background-image:url(/images/background/2.jpg);">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12">
			                <div class="breadcrumbs text-center">
			                    <h1>single product</h1>
			                    <h4>Welcome to certified online organic products suppliersr</h4>
			                </div>
			            </div>
			        </div>
			    </div>
				<div class="breadcrumb-bottom-area">
				    <div class="container">
				        <div class="row">
				            <div class="col-lg-8 col-md-5 col-sm-5">
				                <ul>
				                    <li><a href="#">Home</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li><a href="#">Gallery</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li>single product</li>
				                </ul>
				            </div>
				            <div class="col-lg-4 col-md-7 col-sm-7">
				                <p>We provide <span>100% organic</span> products</p>
				            </div>
				        </div>
				    </div>
				</div>

			</section>


			<!-- Single Shop page content ________________ -->

	        <div class="shop_single_page">
	        	<div class="container">
	        		<div class="row">


	        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_details">
	        				<div class="wrapper">
	        					<div class="product_top_section clear_fix">
	        						<div class="img_holder float_left">
	        							<img src="{{$product_details->image}}" alt="img" class="img-responsive">
	        						</div> <!-- End of .img_holder -->
	        						<div class="item_description float_left">
	        							<h4>{{$product_details->title}}</h4>
	        							<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li>(2 Customers Review)</li>
										</ul>
										<span class="item_price">{{$product_details->price}}</span>
										<p>{{$product_details->description}}</p>
	        						</div> <!-- End of .item_description -->
	        					</div> <!-- End of .product_top_section -->

	        					<!-- __________________ Product review ___________________ -->
	        					<div class="product-review-tab">
									<ul class="nav nav-pills">
									    <li><a data-toggle="pill" href="#tab1">Description</a></li>
									    <li class="active"><a data-toggle="pill" href="#tab2">Reviews(2)</a></li>
								  	</ul>

									 <div class="tab-content">
									    <div id="tab1" class="tab-pane fade">
									      <p>{{$product_details->text}}</p>

									    </div> <!-- End of #tab1 -->

									    <div id="tab2" class="tab-pane fade in active">
									      <!-- Single Review -->
									      <div class="item_review_content clear_fix">
									      	<div class="img_holder float_left">
									      		<img src="/images/gallery/a1.jpg" alt="img">
									      	</div> <!-- End of .img_holder -->

									      	<div class="text float_left">
									      		<div class="sec_up clear_fix">
									      			<h6 class="float_left">Michel Kong</h6>
									      			<div class="float_right">
									      				<span class="p_color">21/08/2015 &nbsp;at &nbsp;09.45</span>
									      				<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
														</ul>
									      			</div>
									      		</div> <!-- End of .sec_up -->
									      		<p>Many web sites still sed in their infancy Various versions have sed evolveed over the years, sometimes by there accident, sometimes all times purpose rationally sed encounter se consequencess ut that are at sed extremely well painful or again is there anyone who loves or seds of pursues.</p>

									      		<div class="up_down_nav">
									      			<a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
									      			<a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
									      		</div> <!-- End of .up_down_nav -->


									      	</div> <!-- End of .text -->
									      </div> <!-- End of .item_review_content -->

									      <!-- Single Review -->
									      <div class="item_review_content clear_fix">
									      	<div class="img_holder float_left">
									      		<img src="images/gallery/a2.jpg" alt="img">
									      	</div> <!-- End of .img_holder -->

									      	<div class="text float_left">
									      		<div class="sec_up clear_fix">
									      			<h6 class="float_left">Jeorge Meckey</h6>
									      			<div class="float_right">
									      				<span class="p_color">26/08/2015 &nbsp;at &nbsp;05.30</span>
									      				<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
														</ul>
									      			</div>
									      		</div> <!-- End of .sec_up -->
									      		<p>Know how to pursue pleasure rationally encounter consequences that are extremely painful nor again is there anyone who loves or pursues or desires to obtain pain seds of itself, because it is pain, under because occasionally circumstances occur in which toil great pleasure.</p>

									      		<div class="up_down_nav">
									      			<a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
									      			<a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
									      		</div> <!-- End of .up_down_nav -->


									      	</div> <!-- End of .text -->
									      </div> <!-- End of .item_review_content -->


									      <div class="add_your_review">
										      	<div class="theme_inner_title">
													<h4>Add Your Review</h4>
												</div>

												<span>Your Rating</span>
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<ul class="fix_border">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>

												<form action="#">
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<input type="text" placeholder="Name*">
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<input type="email" placeholder="Email*">
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<textarea placeholder="Your Review..."></textarea>
														</div>
													</div>
													<button class="color1_bg tran3s">Add A Review</button>
												</form>

									      </div> <!-- End of .add_your_review -->

									    </div> <!-- End of #tab2 -->
									 </div> <!-- End of .tab-content -->
								</div> <!-- End of .product-review-tab -->


								<div class="related_product">
									<div class="theme_title">
										<h3>Related Products</h3>
									</div>


									<!-- Shop Page Content************************ -->
							        <div class="shop_page featured-product">

						        		<div class="row">

								            <!--Default Item-->
								            <div class="col-md-4 col-sm-6 col-xs-12 default-item" style="display: inline-block;">
								                <div class="inner-box">
								                    <div class="single-item center">
								                        <figure class="image-box"><img src="images/shop/1.png" alt=""><div class="product-model new">New</div></figure>
								                        <div class="content">
								                        	<h3><a href="shop-single.html">Turmeric Powder</a></h3>
								                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
								                            <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
								                        </div>
								                        <div class="overlay-box">
								                        	<div class="inner">
									                        	<div class="top-content">
									                        		<ul>
									                        			<li><a href="#"><span class="fa fa-eye"></span></a></li>
									                        			<li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>

																		</li>
									                        			<li><a href="#"><span class="fa fa-heart-o"></span></a></li>
									                        		</ul>
									                        	</div>
									                        	<div class="bottom-content">
									                        		<h4><a href="#">It Contains:</a></h4>
									                        		<p>35% of organic raisins 55% of oats and 10% of butter. </p>
									                        	</div>
								                        	</div>
								                        </div>
									                </div>
								                </div>
								            </div>

								            <!--Default Item-->
								            <div class="col-md-4 col-sm-6 col-xs-12 default-item" style="display: inline-block;">
								                <div class="inner-box">
								                    <div class="single-item center">
								                        <figure class="image-box"><img src="images/shop/2.png" alt=""></figure>
								                        <div class="content">
								                        	<h3><a href="shop-single.html">Turmeric Powder</a></h3>
								                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
								                            <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
								                        </div>
								                        <div class="overlay-box">
								                        	<div class="inner">
									                        	<div class="top-content">
									                        		<ul>
									                        			<li><a href="#"><span class="fa fa-eye"></span></a></li>
									                        			<li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>

																		</li>
									                        			<li><a href="#"><span class="fa fa-heart-o"></span></a></li>
									                        		</ul>
									                        	</div>
									                        	<div class="bottom-content">
									                        		<h4><a href="#">It Contains:</a></h4>
									                        		<p>35% of organic raisins 55% of oats and 10% of butter. </p>
									                        	</div>
								                        	</div>
								                        </div>
									                </div>
								                </div>
								            </div>

								            <!--Default Item-->
								            <div class="col-md-4 col-sm-6 col-xs-12 default-item" style="display: inline-block;">
								                <div class="inner-box">
								                    <div class="single-item center">
								                        <figure class="image-box"><img src="images/shop/3.png" alt=""><div class="product-model hot">Hot</div></figure>
								                        <div class="content">
								                        	<h3><a href="shop-single.html">Turmeric Powder</a></h3>
								                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
								                            <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
								                        </div>
								                        <div class="overlay-box">
								                        	<div class="inner">
									                        	<div class="top-content">
									                        		<ul>
									                        			<li><a href="#"><span class="fa fa-eye"></span></a></li>
									                        			<li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>

																		</li>
									                        			<li><a href="#"><span class="fa fa-heart-o"></span></a></li>
									                        		</ul>
									                        	</div>
									                        	<div class="bottom-content">
									                        		<h4><a href="#">It Contains:</a></h4>
									                        		<p>35% of organic raisins 55% of oats and 10% of butter. </p>
									                        	</div>
								                        	</div>
								                        </div>
									                </div>
								                </div>
								            </div>

						        		</div> <!-- End of .row -->

							        </div> <!-- End of .shop_page -->
								</div> <!-- End of .related_product -->
	        				</div> <!-- End of .wrapper -->
	        			</div> <!-- End of .col -->


	        		</div> <!-- End of .row -->
	        	</div> <!-- End of .container -->
	        </div> <!-- End of .shop_single_page -->
@endsection

