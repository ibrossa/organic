@extends('layouts.app')

@section('content')

    <section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs text-center">
                        <h1>faq's</h1>
                        <h4>Welcome to certified online organic products suppliersr</h4>
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
                            <li>faq's</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-7">
                        <p>We provide <span>100% organic</span> products</p>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section class="faq-content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-autocare-faq">
                        <div class="accordion-box">

                            <!--Start single accordion box-->
                            @foreach($faqs as $faq)
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                   {{$faq->title}}
                                    <div class="toggle-icon">
                                        <span class="plus fa fa-plus"></span><span class="minus fa fa-minus"></span>
                                    </div>
                                    <div class="left-icon">
                                        <span class="fa fa-question-circle"></span>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>{{$faq->description}}</p>
                                </div>
                            </div>
                            @endforeach
                            <!--End single accordion box-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
