@extends('layouts.app')

@section('content')

@include('layouts.partials._second_header')

{{--Our Story About--}}
<section class="about-story">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <figure class="img-holder">
                    <img src="{{Voyager::image(setting('about-page.story_background'))}}" alt="">
                </figure>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="about-text">
                    <div class="theme_title">
                        <h3>{{setting('about-page.story_title')}}</h3>
                    </div>
                    <div class="about_quot">
                        {{ setting('about-page.story_subtitle') }}
                    </div>
                    <div class="text"><p>{!! setting('about-page.story_main_description') !!}</p></div>
                    <div class="icon-box">
                        <div class="single-item">
                            <div class="icon"><i class="icon-wheat"></i></div>
                            <div class="count">{{setting('about-page.story_farm_count')}}</div>
                            <div class="name color1">{{setting('about-page.story_own_farms')}}</div>
                        </div>
                        <div class="single-item">
                            <div class="icon"><i class="icon-nature-1"></i></div>
                            <div class="count">{{setting('about-page.story_farmer_count')}}</div>
                            <div class="name color1">{{setting('about-page.story_farmer')}}</div>
                        </div>
                    </div>
                    <div class="text">
                        <p>{!! setting('about-page.story_description') !!}</p>
                    </div>
                    <div class="link">
                        <a href="{{route('news')}}" class="tran3s">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="three-column">
    <div class="contaner-fluid">
        <div class="row">
            @foreach($category_description as $item)
                <div class="col-md-4 col-sm-12 col-xs-12 color1_bg text-center">
                    <div class="single-item ">
                        <h5>{{$item->title}}</h5>
                        <div class="icon"><i class="{{$item->image}}"></i></div>
                        <p>{{$item->text}}</p>
                        <div class="link"><a href="{{route('store')}}">Shop Now</a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{--Delivery Procces--}}
<section class="four-column">
    <div class="container text-center">
        <div class="theme_title center">
            <h3>Delivery Process</h3>
        </div>
        <div class="row">
            @foreach($deliveries as $item)
                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="single-item ">
                        <div class="inner-box"><div class="icon"><i class="{{$item->image}}"></i><span>{{$item->id}}</span></div></div>
                        <h5>{{$item->title}}</h5>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="link"><a href="{{route('store')}}" class="rot tran3s color1_bg">Shop products</a></div>
    </div>
</section>

{{--Gallery--}}
<section class="gallery gallery-grid about-gallery" style="background-image:url(/images/background/3.jpg);">
    <div class="tab-links">
        <div class="container">
            <div class="iblock">
                <div class="theme_title text-left">
                    <h2>Our gallery</h2>
                </div>
            </div>
            <ul class="tab-list">
                @foreach($categories as $category)
                    <li><a data-role="button" data-filter=".{{$category->id}}"  class="filter"><h2><i class="icon-food-2"></i>{{$category->title}}</h2></a></li>
                @endforeach
            </ul>
            <div class="link-btn"><a href="{{route('store')}}" class="tran3s">VIEW MORE<span class="fa fa-sort-desc"></span></a></div>
        </div>
    </div>
    <!--tab Content-->
    <div class="tab-content">
        <div class="container-fluid">
            <!--tab Details / Collapsed-->
            <div class="item collapsed" id="">
                <div class="row-10">
                @foreach($products as $product)
                    <!--Default Item-->
                        <div class="col-md-2 column-2 col-sm-6 col-xs-12 default-item all {{$product->category_id}} ">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="{{Voyager::image($product->image)}}" alt=""></figure>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="image-view">
                                                <div class="icon-holder">
                                                    <a href="{{Voyager::image($product->image)}}" class="fancybox"><span class="icon-magnifier"></span></a>
                                                </div>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="{{route('store.product_details', $product->id)}}"> {{$product->title}}</a></h4>
                                                <div class="price"> {{$product->price}} <span class="prev-rate"> {{$product->old_price}}</span></div>
                                                <div class="icon-box"><a href=""><span class="icon-icon-32846"></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{--Awards & Recognition--}}
<section class="award">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="award-info">
                    <div class="theme_title">
                        <h2>{{setting('about-page.awards')}}</h2>
                    </div>
                </div>
                <div class="text">
                    <p>{!! setting('about-page.awards_text') !!}</p>
                </div>
                <div class="award-logo">
                    <ul>
                        @foreach($award_images as $image)
                            <li><img src="{{Voyager::image($image->image)}}" alt=""></li>
                        @endforeach
                    </ul>
                </div>
                <div class="customer-text">
                    {!! setting('about-page.Awards_support') !!}
                    {!! setting('about-page.ofice_hours') !!}
                </div>
            </div>
            {{--Send Message Form--}}
            <div class="col-md-6 col-sm-12">
                <div class="contact_in-box">
                    <div class="theme-title ">
                        <h2>send us message</h2>
                    </div>
                    <form method="post" action="\about">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Name*" name="name" >
                                @error('name')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Email*" name="email">
                                @error('email')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone" name="phone" >
                                @error('phone')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject" name="subject">
                                @error('subject')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Comments" name="text"></textarea>
                                @error('text')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <button type="submit" class="color1_bg">Post Comment</button>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


