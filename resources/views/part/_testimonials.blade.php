<section class="testimonials-section" style="background-image:url(images/parallax/1.jpg);">
    <div class="container">
        <div class="theme_title">
            <h2>testimonials</h2>
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
