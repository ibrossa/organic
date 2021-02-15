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
