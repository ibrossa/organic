
<!-- about Section ************************** -->

<div class="about_section">
    <div class="container">
        <div class="row">
            @foreach($sections as $section)
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12t">
                <div class="item wow fadeInLef" style="background-image: url({{Voyager::image($section->image)}});">
                    <div class="offer-sec">
                        <div class="inner-title">for all cosmetics<div class="offer"><span>30% <br>OFF</span></div></div>
                    </div>
                    <div class="content">
                        <h3>{{$section->title}}</h3>
                        <p>{!! $section->text !!}</p>
                        <div class="link-btn"><a href="\store" class="tran3s">More Products<span class="fa fa-sort-desc"></span></a></div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div> <!-- End of .container -->
</div> <!-- End of .welcome_section -->\
