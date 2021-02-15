@extends('layouts.app')

@section('content')

@include('layouts.partials._second_header')

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
