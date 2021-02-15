@foreach($second_header as $header)
    <section class="breadcrumb-area" style="background-image:url({{Voyager::image($header->image)}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs text-center">
                        <h1>{{$header->title}}</h1>
                        <h4>{{$header->sub_title}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-5 col-sm-5">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            <li>{{$header->title}}</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-7">
                        <p>We provide <span>100% organic</span> products</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
