@extends('layouts.app')

@section('content')


            <!-- ******* Cart And Search Option ******** -->
            <div class="nav_side_content pull-right">
                <ul class="icon_header">
                    <li class="border_round tran3s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="border_round tran3s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="border_round tran3s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="border_round tran3s"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div> <!-- End of .nav_side_content -->

        </div> <!-- End of .conatiner -->
    </div> <!-- End of .theme_menu -->


    <section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs text-center">
                        <h1>our store</h1>
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
                            <li>our store</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-7">
                        <p>We provide <span>100% organic</span> products</p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Shop Page Content************************ -->

    <div class="shop_page featured-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-sx-12">

                    <div class="row">
                    @foreach($products as $product)
                        <!--Default Item-->

                        <div class="col-md-4 col-sm-6 col-xs-12 default-item" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img href="{{route('store.product_details', $product->id)}}" src="{{$product->image}}" alt=""><div class="product-model {{$product->status}}">{{$product->status}}</div></figure>
                                    <div class="content">
                                        <h3><a href="{{route('store.product_details', $product->id)}}">{{$product->title}} </a></h3>
                                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                        <div class="price">${{$product->price}}<span class="prev-rate">${{$product->old_price}}</span></div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="bottom-content">
                                                <h4><a href="{{route('store.product_details', $product->id)}}">It Contains:</a></h4>
                                                <p>{{$product->contains}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    </div>
                </div>

                <!-- _______________________ SIDEBAR ____________________ -->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar_styleTwo">
                    <div class="wrapper">
                        <div class="sidebar_search">
                            <form action="#">
                                <input type="text">
                                <button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div> <!-- End of .sidebar_styleOne -->

                        <div class="sidebar_categories">
                            <div class="theme_inner_title">
                                <h4>Categories</h4>
                            </div>
                            @foreach($categories as $cat)
                            <ul>
                                <li><a href="/store?catId={{$cat->id}}" class="tran3s">{{$cat->title}}( {{$cat->products()->count()}} )</a></li>
                            </ul>
                            @endforeach
                        </div> <!-- End of .sidebar_categories -->

                        <div class="price_filter wow fadeInUp">
                            <div class="theme_inner_title">
                                <h4>Filter By Price</h4>
                            </div>
                            <div class="single-sidebar price-ranger">
                                <div id="slider-range"></div>
                                <div class="ranger-min-max-block">
                                    <input type="submit" value="Filter">
                                    <span>Price:</span>
                                    <input type="text" readonly class="min">
                                    <span>-</span>
                                    <input type="text" readonly class="max">
                                </div>
                            </div> <!-- /price-ranger -->
                        </div> <!-- /price_filter -->

                        <div class="best_sellers clear_fix wow fadeInUp">
                            <div class="theme_inner_title">
                                <h4>popular products</h4>
                            </div>

                            @foreach($hot_products as $product)
                                <div class="best_selling_item clear_fix border">
                                    <div class="img_holder float_left">
                                        <img src="{{$product->image}}" alt="image">
                                    </div> <!-- End of .img_holder -->

                                    <div class="text float_left">
                                        <a href="shop-single.html"><h6>{{$product->title}}</h6></a>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <span>{{$product->price}}</span>
                                    </div> <!-- End of .text -->
                                </div> <!-- End of .best_selling_item -->
                            @endforeach

                            </div> <!-- End of .best_selling_item -->
                        </div> <!-- End of .best_sellers -->
                    </div> <!-- End of .wrapper -->
                </div> <!-- End of .sidebar_styleTwo -->
            </div> <!-- End of .row -->
        </div> <!-- End of .container -->
    </div> <!-- End of .shop_page -->
@endsection
