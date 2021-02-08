
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
            <div class="link-btn"><a href="\store" class="tran3s">VIEW MORE<span class="fa fa-sort-desc"></span></a></div>
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
                        <div class="col-md-2 column-2 col-sm-6 col-xs-12 default-item all {{$product->cat_id}} ">
                            <div class="inner-box">

                                <div class="single-item center">
                                    <figure class="image-box"><img src=" {{$product->image}}" alt=""></figure>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="image-view">
                                                <div class="icon-holder">
                                                    <a href=" {{$product->image}}" class="fancybox"><span class="icon-magnifier"></span></a>
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
