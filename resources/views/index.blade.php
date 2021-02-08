@extends('layouts.app')

@section('content')

@include('part.slaider')

@include('part.aboutsection')



			    <!--feature Section-->
		    <section class="featured-product">
		        <div class="container">

		            <div class="theme_title center">
		                <h3>FEATURED PRODUCTS</h3>
		            </div>

		            <!--Filter-->
		            <div class="filters text-center">
		                <ul class="filter-tabs filter-btns clearfix">
		                    <li class="filter active" data-role="button" data-filter="all"><span class="txt">All Products</span></li>
                            @foreach($categories as $category)
                            <li class="filter" data-role="button" data-filter=".{{$category->id}}"><span class="txt">{{$category->title}}</span></li>
                            @endforeach
		                </ul>
		            </div>

		            <div class="row filter-list clearfix" id="MixItUp717B05">

                        @foreach($products as $product)
			            <!--Default Item-->
			            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all {{$product->cat_id}} " style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">
			                        <figure class="image-box"><img src="{{$product->image}}" alt=""><div class="product-model {{$product->status}}">{{$product->status}}</div></figure>
			                        <div class="content">
			                        	<h3><a href="shop-single.html">{{$product->name}}</a></h3>
			                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
			                            <div class="price">${{$product->price}} <span class="prev-rate">${{$product->old_price}}</span></div>
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
				                        		<h4><a href="{{route('store.product_details', $product->id)}}">It Contains:</a></h4>
				                        		<p>{{$product->contains}} </p>
				                        	</div>
			                        	</div>
			                        </div>
				                </div>
			                </div>
			            </div>
                        @endforeach
			            <!--Default Item-->
                    </div>
                </div>
            </section>
        @include('part._whychoose')

        @include('part._latestnews')

		@include('part._ourfarmers')



        <!--Testimonials Section-->
          @include('part._testimonials')

			<!-- Partner Logo********************** -->

	        <div class="partners wow fadeInUp">
	        	<div class="container">
	        		<div id="partner_logo" class="owl-carousel owl-theme">
                        @foreach($partners_logo as $logo)
                        <div class="item"><a href=""><img src="{{$logo->image}}" alt="logo"></a></div>
						@endforeach

					</div> <!-- End .partner_logo -->
				</div>
			</div>





			<section class="call-out">
			    <div class="container">
			        <div class="float_left">
			            <h2>Subscribe For Newsletter</h2>
			            <p>We send you latest news couple a month ( No Spam).</p>
			        </div>
			        <div class="float_right">
			        	<div class="contact-box">

		                    <form method="post" action="\" class="contact-form" >
                                @csrf
		                        <div class="row clearfix">
		                            <div class="form-group">
		                                <input type="text" name="name"  placeholder="Your Name*"><i class="fa fa-user" ></i>

		                            </div>

		                            <div class="form-group">
		                                <input type="email" name="email"  placeholder="Email Address*"><i class="fa fa-envelope" ></i>
		                            </div>


		                            <div class="form-group">
		                                <button type="submit"  class="btn-style-one center">Submit now</button>
		                            </div>
		                        </div>
		                    </form>
		                </div>
			        </div>
			    </div>
			</section>

@endsection

