<!-- Request Quote ******************************* -->
<section class="why_choose_us">
    <div class="theme_title_bg" style="background-image: url(/images/background/1.jpg);">
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
            @foreach($whychoose as $choose)
            <!-- ______________ Item _____________ -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="choose_us_item tran3s">
                    <div class="icon p_color_bg border_round float_left"><span class="{{Voyager::image($choose->image)}}"></span></div> <!-- End of .icon -->
                    <div class="text float_left">
                        <h5 class="tran3s">{{$choose->title}}</h5>
                        <p class="tran3s">{!! $choose->description !!}</p>
                    </div> <!-- End of .text -->
                    <div class="clear_fix"></div>
                </div> <!-- End of .choose_us_item -->
            </div> <!-- End of .col -->
            @endforeach
                   </div>
    </div> <!-- End of .container -->
</section> <!-- End of why chooreus -->

