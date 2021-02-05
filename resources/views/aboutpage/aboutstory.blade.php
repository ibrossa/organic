<section class="about-story">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <figure class="img-holder">
                    <img src="{{$aboutstories->image}}" alt="">
                </figure>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="about-text">
                    <div class="theme_title">
                        <h3>{{$aboutstories->title}}</h3>
                    </div>
                    <div class="about_quot">
                        {{$aboutstories->about_title}}
                    </div>
                    <div class="text"><p>{{$aboutstories->text}}</p></div>
                    <div class="icon-box">
                        <div class="single-item">
                            <div class="icon"><i class="icon-wheat"></i></div>
                            <div class="count">{{$aboutstories->farm_count}}+</div>
                            <div class="name color1">Own Farm Houses</div>
                        </div>
                        <div class="single-item">
                            <div class="icon"><i class="icon-nature-1"></i></div>
                            <div class="count">{{$aboutstories->farmer_count}}+</div>
                            <div class="name color1">Pastoral Farmers</div>
                        </div>


                    </div>
                    <div class="text">
                        <p>{{$aboutstories->sec_text}}</p>
                    </div>
                    <div class="link">
                        <a href="#" class="tran3s">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
