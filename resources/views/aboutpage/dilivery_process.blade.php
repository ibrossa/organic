<section class="four-column">
    <div class="container text-center">
        <div class="theme_title center">
            <h3>Delivery Process</h3>
        </div>
        <div class="row">
            @foreach($deliveries as $delivery)
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="single-item ">
                    <div class="inner-box"><div class="icon"><i class="{{$delivery->image}}"></i><span>1</span></div></div>
                    <h5>{{$delivery->title}}</h5>
                    <p>{{$delivery->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="link"><a href="\store" class="rot tran3s color1_bg">Shop products</a></div>
    </div>
</section>
