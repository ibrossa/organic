
@extends('layouts.app')

@section('content')
<section class="breadcrumb-area" style="background-image:url(/images/background/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1>{{$product->title}}</h1>
                    <h4>{!! $product->contains !!}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-5 col-sm-5">
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        <li>{{$product->title}}</li>
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
                            <img src="{{Voyager::image($product->image)}}" alt="img" class="img-responsive">
                        </div> <!-- End of .img_holder -->
                        <div class="item_description float_left">
                            <h4>{{$product->title}}</h4>
                            <ul>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li>({{$product->product_review->count()}} Customers Review)</li>
                            </ul>
                            <span class="item_price">{{$product->price}}</span>
                            <p>{!! $product->description !!}</p>
                        </div> <!-- End of .item_description -->
                    </div> <!-- End of .product_top_section -->

                    <!-- __________________ Product review ___________________ -->
                    <div class="product-review-tab">
                        <ul class="nav nav-pills">
                            <li><a data-toggle="pill" href="#tab1">Description</a></li>
                            <li class="active"><a data-toggle="pill" href="#tab2">Reviews({{$product->product_review->count()}})</a></li>
                            <li class="button cart_button"><a href="#"><span class="icon-icon-32846"></span></a></li>
                        </ul>

                         <div class="tab-content">
                            <div id="tab1" class="tab-pane fade">
                              <p>{!! $product->text !!}</p>
                            </div> <!-- End of #tab1 -->

                            <div id="tab2" class="tab-pane fade in active">
                                @foreach($reviews as $review)<!-- Single Review -->
                                    <div class="item_review_content clear_fix">
                                <div class="img_holder float_left">
                                    <img src="/images/gallery/a1.jpg" alt="img">
                                </div> <!-- End of .img_holder -->

                                <div class="text float_left">
                                    <div class="sec_up clear_fix">
                                        <h6 class="float_left">{{$review->name}}</h6>
                                        <div class="float_right">
                                            <span class="p_color">{{$review->created_at}}</span>
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div> <!-- End of .sec_up -->
                                    <p>{!! $review->review !!}</p>
                                    <div class="up_down_nav">
                                        <a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    </div> <!-- End of .up_down_nav -->

                                </div> <!-- End of .text -->
                              </div> <!-- End of .item_review_content -->
                                @endforeach
                              <!-- Single Review -->
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

                                    <form method="post" action="{{ route('store.product_review', $product->id) }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" placeholder="Name*" name="name">
                                                     @error('name')
                                                <div class="alert alert-danger">{{$message}} </div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" placeholder="Email*"name="email">
                                                @error('email')
                                                      <div class="alert alert-danger">{{$message}} </div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <textarea placeholder="Your Review..." name="review"></textarea>
                                                @error('review')
                                                    <div class="alert alert-danger">{{$message}} </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="color1_bg tran3s">Add A Review</button>
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
                                @foreach($related as $item)
                                <!--Default Item-->
                                     <div class="col-md-4 col-sm-6 col-xs-12 default-item" style="display: inline-block;">
                                    <div class="inner-box">
                                        <div class="single-item center">
                                            <figure class="image-box"><img src="{{Voyager::image($item->image)}}" alt=""><div class="product-model {{$item->flag}}">{{$item->flag}}</div></figure>
                                            <div class="content">
                                                <h3><a href="{{route('store.product_details',$product->id)}}">{{$item->title}}</a></h3>
                                                <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                                <div class="price">{{$item->price}} <span class="prev-rate">{{$item->old_price}}</span></div>
                                            </div>
                                            <div class="overlay-box">
                                                <div class="inner">
                                                    <div class="top-content">
                                                        <ul>
                                                            <li><a href="#"><span class="fa fa-eye"></span></a></li>
                                                            <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>

                                                            </li>
                                                            <li><a href="{{route('store.product_details',$product->id)}}><span class="fa fa-heart-o"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-content">
                                                        <h4><a href="{{route('store.product_details',$product->id)}}">It Contains:</a></h4>
                                                        <p>{!! $item->contains !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div> <!-- End of .row -->
                        </div> <!-- End of .shop_page -->
                    </div> <!-- End of .related_product -->
                </div> <!-- End of .wrapper -->
            </div> <!-- End of .col -->
        </div> <!-- End of .row -->
    </div> <!-- End of .container -->
</div> <!-- End of .shop_single_page -->
<script>
    $(document).ready(function () {
        $('.cart_button').click(function () {
            addToCard()
        })
    })
    function addToCard() {
        $.ajax({
            url:"{{route('addToCart')}}",
            type:"POST",
            data:{
                id:100
            },
            success: (data)=>{
                console.log(data)
            }

        })

    }
</script>
@endsection

