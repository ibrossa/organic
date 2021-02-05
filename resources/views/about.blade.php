@extends('layouts.app')

@section('content')


    <section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs text-center">
                        <h1>about us</h1>
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
                            <li>about us</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-7">
                        <p>We provide <span>100% organic</span> products</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('aboutpage.aboutstory')

    @include('aboutpage.three_colum')

    @include('aboutpage.dilivery_process')


    @include('aboutpage.gallery')


   @include('aboutpage.awards')

    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h2>Subscribe For Newsletter</h2>
                <p>We send you latest news couple a month ( No Spam).</p>
            </div>
            <div class="float_right">
                <div class="contact-box">

                    <form method="post" action="http://st.ourhtmldemo.com/template/organic_store/sendemail.php" class="contact-form" novalidate="novalidate">

                        <div class="row clearfix">
                            <div class="form-group">
                                <input type="text" name="name" value="" placeholder="Your Name*" ><i class="fa fa-user" aria-hidden="true"></i>

                            </div>

                            <div class="form-group">
                                <input type="email" name="mail" value="" placeholder="Email Address*"><i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>


                            <div class="form-group">
                                <button type="submit" name="submit" class="btn-style-one center">Submit now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection


