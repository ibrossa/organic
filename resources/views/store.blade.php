@extends('layouts.app')

@section('content')

@include('layouts.partials._second_header')

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
                                    <figure class="image-box"><img
                                            href="{{route('store.product_details', $product->id)}}"
                                            src="{{Voyager::image($product->image)}}" alt="">
                                        <div class="product-model {{$product->flag}}">{{$product->flag}}</div>
                                    </figure>
                                    <div class="content">
                                        <h3>
                                            <a href="{{route('store.product_details', $product->id)}}">{{$product->title}} </a>
                                        </h3>
                                        <div class="rating"><span class="fa fa-star"></span> <span
                                                class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                                class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                        <div class="price">${{$product->price}}$<span class="prev-rate">${{$product->old_price}}$</span>
                                        </div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="bottom-content">
                                                <h4><a href="{{route('store.product_details', $product->id)}}">It
                                                        Contains:</a></h4>
                                                <p>{!! $product->contains !!}</p>

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
                            <button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div> <!-- End of .sidebar_styleOne -->

                    <div class="sidebar_categories">
                        <div class="theme_inner_title">
                            <h4>Categories</h4>
                        </div>
                        @foreach($categories as $cat)
                            <ul>
                                <li><a href="/store?catId={{$cat->id}}" class="tran3s">{{$cat->title}}
                                        ( {{$cat->products()->count()}} )</a></li>
                            </ul>
                        @endforeach
                    </div> <!-- End of .sidebar_categories -->

                    <div class="price_filter wow fadeInUp">
                        <div class="theme_inner_title">
                            <h4>Filter By Price</h4>
                        </div>
                        <div class="single-sidebar price-ranger">
                            <div id="slider-range"></div>
                            <form method="get" action="/store">
                                <div class="ranger-min-max-block">
                                    <input type="submit" value="Filter">
                                    <span>Price:</span>
                                    <input type="hidden" readonly class="min" name="min">
                                    <input type="text" readonly class="min_doll">
                                    <span>-</span>
                                    <input type="hidden" readonly class="max" name="max">
                                    <input type="text" readonly class="max_doll">
                                </div>
                            </form>
                        </div> <!-- /price-ranger -->
                    </div> <!-- /price_filter -->

                    <div class="best_sellers clear_fix wow fadeInUp">
                        <div class="theme_inner_title">
                            <h4>popular products</h4>
                        </div>
                        @foreach($hot_products as $product)
                            <div class="best_selling_item clear_fix border">
                                <div class="img_holder float_left">
                                    <a href="{{route('store.product_details',$product->id)}}">
                                        <img src="{{Voyager::image($product->image)}}" alt="image">
                                    </a>
                                </div> <!-- End of .img_holder -->
                                <div class="text float_left">
                                    <a href="{{route('store.product_details',$product->id)}}">
                                        <h6>{{$product->title}}</h6></a>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                    <span>{{$product->price}}$</span>
                                </div> <!-- End of .text -->
                            </div> <!-- End of .best_selling_item -->
                        @endforeach
                    </div> <!-- End of .best_selling_item -->
                </div> <!-- End of .best_sellers -->
            </div> <!-- End of .wrapper -->
        </div> <!-- End of .sidebar_styleTwo -->
    </div> <!-- End of .row -->
</div> <!-- End of .container -->

@endsection
