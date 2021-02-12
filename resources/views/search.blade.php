@extends('layouts.app')

@section('content')

        <section class="news">
            <div class="container">
                <div class="theme_title center">
                    <h3>News</h3>
                </div>
                @if(count($blogs))
                <div class="row">
                    @foreach($blogs as $blog)
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
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$blog->created_at}}</a></li>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i> 26</a></li>
                                    </ul>
                                    <div class="text">
                                        <h4><a href="{{route('news.blog_details', $blog->id)}}}">{{$blog->title}}</a></h4>
                                        <p>{!! $blog->description !!}</p>
                                        <div class="link"><a href="{{route('news.blog_details', $blog->id)}}" class="tran3s">READ MORE<span class="fa fa-sort-desc"></span></a></div>

                                    </div>

                                </div> <!-- End of .post -->
                            </div>
                        </div>
                    @endforeach



                </div>
                @else
                    <h2>Таких статей не найдено</h2>
                @endif
            </div>
        </section>

        <section class="featured-product">
            <div class="container">

                <div class="theme_title center">
                    <h3>PRODUCTS</h3>
                </div>
                @if(count($products))
                <div class="row filter-list clearfix" id="MixItUp717B05">
                @foreach($products as $product)
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
                                                    <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>

                                                    </li>
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
                @else
                    <h2>Таких продуктов не найдено</h2>
                @endif
            </div>
        </section>






@endsection
