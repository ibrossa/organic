@extends('layouts.app')

@section('content')

@include('layouts.partials._second_header')

<section class="single-contact_us">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="left_contact">
                    <h5>{{setting('contact-us.contact_us')}}</h5>
                    <ul class="list catagories">
                        <li><i class="fa fa-home color1"></i>{{setting('contact-us.addres')}}</li>
                        <li><i class="fa fa-envelope color1"></i>{{setting('contact-us.email')}}</li>
                        <li><i class="fa fa-phone color1"></i>{{setting('contact-us.phone')}}</li>
                    </ul>
                    <div class="border-area">
                        <h6>{{setting('contact-us.business_hours')}}</h6>
                        <div class="list Business">
                            {{setting('contact-us.work_hours')}}<br><span>{{setting('contact-us.sunday')}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="contact_in-box">
                    <div class="theme-title ">
                        <h2>send us massege</h2>
                    </div>
                    <form method="post" action="\contact">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Name*" name="name">
                                @error('name')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Email*" name="email">
                                @error('email')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone" name="phone">
                                @error('phone')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject" name="subject">
                                @error('subject')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Comments" name="text"></textarea>
                                @error('text')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <button type="submit" class="color1_bg">Post Comment</button>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google map************************ -->
<section id="google-map-area">
    <div class="google-map-home" id="google-map" data-map-lat="40.717873" data-map-lng="-73.563033"
         data-icon-path="images/logo/map.png" data-map-title="Awesome Place" data-map-zoom="11"></div>
</section>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> <!-- Gmap Helper -->

@endsection
