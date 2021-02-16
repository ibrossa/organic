@extends('layouts.app')

@section('content')

@include('part.slaider')

<!-- about Section ************************** -->
<div class="about_section">
    <div class="container">
        <div class="row">
            @foreach($offers as $offer)
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12t">
                    <div class="item wow fadeInLef" style="background-image: url({{Voyager::image($offer->image)}});">
                        <div class="offer-sec">
                            <div class="inner-title">{!! $offer->offer !!}<div class="offer"><span>{!! $offer->procent !!}<br>OFF</span></div></div>
                        </div>
                        <div class="content">
                            <h3>{{$offer->title}}</h3>
                            <p>{!! $offer->text !!}</p>
                            <div class="link-btn"><a href="\store" class="tran3s">More Products<span class="fa fa-sort-desc"></span></a></div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div> <!-- End of .container -->
</div> <!-- End of .welcome_section -->\

<!--feature Section-->
<section class="featured-product">
    <div class="container">
        <div class="theme_title center">
            <h3>{{setting('main.product_title')}}</h3>
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
            @foreach($latest_products as $product)
            <!--Default Item-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all {{$product->category_id}} " style="display: inline-block;">
                <div class="inner-box">
                    <div class="single-item center">
                        <figure class="image-box"><img src="{{Voyager::image($product->image)}}" alt=""><div class="product-model {{$product->flag}}">{{$product->flag}}</div></figure>
                        <div class="content">
                            <h3><a href="shop-single.html">{{$product->title}}</a></h3>
                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                            <div class="price">${{$product->price}} <span class="prev-rate">${{$product->old_price}}</span></div>
                        </div>
                        <div class="overlay-box">
                            <div class="inner">
                                <div class="top-content">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-eye"></span></a></li>
                                        <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a></li>
                                        <li><a href="#"><span class="fa fa-heart-o"></span></a></li>
                                    </ul>
                                </div>
                                <div class="bottom-content">
                                    <h4><a href="{{route('store.product_details', $product->id)}}">It Contains:</a></h4>
                                    <p>{!! $product->contains !!} </p>
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

<!-- Request Quote ******************************* -->
<section class="why_choose_us">
    <div class="theme_title_bg" style="background-image: url({{Voyager::image(setting('main.why_background'))}}">
        <div class="theme_title center">
            <div class="container">
                <h2>{{setting('main.why_title')}}</h2>
                {!! setting('main.why_text') !!}
            </div>
        </div>
    </div>
    <div class="container">
        <!-- End of .theme_title_center -->
        <div class="row">
        @foreach($why_choose as $item)
            <!-- ______________ Item _____________ -->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="choose_us_item tran3s">
                        <div class="icon p_color_bg border_round float_left"><span class="{{Voyager::image($item->image)}}"></span></div> <!-- End of .icon -->
                        <div class="text float_left">
                            <h5 class="tran3s">{{$item->title}}</h5>
                            <p class="tran3s">{!! $item->description !!}</p>
                        </div> <!-- End of .text -->
                        <div class="clear_fix"></div>
                    </div> <!-- End of .choose_us_item -->
                </div> <!-- End of .col -->
            @endforeach
        </div>
    </div> <!-- End of .container -->
</section> <!-- End of why chooreus -->

{{--Latest News--}}
<section class="news">
    <div class="container">
        <div class="theme_title center">
            <h3>{{setting('main.news_title')}}</h3>
        </div>
        <div class="row">
            @foreach($latest_posts as $blog)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="img_holder">
                            <img src="{{Voyager::image($blog->image)}}" alt="News" class="img-responsive">
                            <div class="opacity tran3s">
                                <div class="icon">
                                    <span><a href="{{route('news.blog_details', $blog->id)}}" class="border_round">+</a></span>
                                </div> <!-- End of .icon -->
                            </div> <!-- End of .opacity -->
                        </div> <!-- End of .img_holder -->
                        <div class="post">
                            <ul>
                                <li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$blog->created_at}}</a></li>
                                <li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i>{{$blog->blog_comments->count()}}</a></li>
                            </ul>
                            <div class="text">
                                <h4><a href="{{route('news.blog_details', $blog->id)}}}">{{$blog->title}}</a></h4>
                                <p>{!! $blog->small_description !!}</p>
                                <div class="link"><a href="{{route('news.blog_details', $blog->id)}}" class="tran3s">READ MORE<span class="fa fa-sort-desc"></span></a></div>
                            </div>
                        </div> <!-- End of .post -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Our Service ****************************** -->
<div class="our_farmer">
    <div class="container">
        <div class="theme_title center">
            <h2>{{setting('main.farmers_title')}}</h2>
        </div>
        <div class="row">
            <div class="service_slider owl-carousel owl-theme">
                @foreach($farmers as $farmer)
                    <div class="item center">
                        <div class="img_holder">
                            <img src="{{Voyager::image($farmer->image)}}" alt="images">
                            <div class="overlay tran3s">
                                <div class="inner-box">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <h4>{{$farmer->name}}</h4>
                            <a href="turnaround.html"><h5>{{$farmer->position}}</h5></a>
                            <p>{!! $farmer->description !!}</p>
                        </div>
                    </div> <!-- End of .item -->
                @endforeach
            </div> <!-- End of .service_slider -->
        </div>
    </div>
</div> <!-- End of .our_service -->


<!--Testimonials Section-->
<section class="testimonials-section" style="background-image:url({{Voyager::image(setting('admin.bg_image'))}});">
    <div class="container">
        <div class="theme_title">
            <h2>{{setting('main.testimonials_title')}}</h2>
        </div>
        <div class="testimonials-carousel">
        @foreach($testimonials as $testimonial)
            <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner-box">
                        <div class="content">
                            <div class="text-bg">
                                <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                                <div class="text">{!! $testimonial->description !!}</div>
                            </div>
                            <div class="info clearfix">
                                <div class="author-thumb"><img src="{{Voyager::image($testimonial->image)}}" alt=""></div>
                                <div class="author">{{$testimonial->name}}</div>
                                <div class="author-title">{{$testimonial->position}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Partner Logo********************** -->
<div class="partners wow fadeInUp">
    <div class="container">
        <div id="partner_logo" class="owl-carousel owl-theme">
            @foreach($partners_logo as $logo)
            <div class="item"><a href=""><img src="{{Voyager::image($logo->image)}}" alt="logo"></a></div>
            @endforeach
        </div> <!-- End .partner_logo -->
    </div>
</div>

@endsection

