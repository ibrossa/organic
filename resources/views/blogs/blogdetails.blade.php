@extends('layouts.app')
@section('content')
<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1>{{$blog->title}}</h1>
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
                        <li>News single</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-7">
                    <p>We provide <span>100% organic</span> products</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="news single_news_page with_sidebar news_single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single_left_bar">
                    <div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="img_holder">
                            <img src="{{$blog->image}}" alt="News" class="img-responsive">
                            <div class="opacity tran3s">
                                <div class="icon">
                                    <span><a href="blog-details.html" class="border_round">+</a></span>
                                </div> <!-- End of .icon -->
                            </div> <!-- End of .opacity -->
                        </div> <!-- End of .img_holder -->
                        <div class="post">

                            <div class="text">
                                <h4><a href="blog-details.html">{{$blog->title}}</a></h4>
                                <ul>
                                    <li><a href="blog-details.html" class="tran3s"><i class="fa fa-user" aria-hidden="true"></i> {{$blog->author_name}}</a></li>
                                    <li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
                                    <li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$blog->created_at}}</a></li>
                                    <li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i> 26</a></li>
                                </ul>
                            </div>

                            <div class="text"><p>{{$blog->text}}</p></div>

                        </div> <!-- End of .post -->

                        <div class="author-post">
                            <div class="comment-box">
                                <div class="theme_title ">
                                    <h2>about author</h2>

                                </div>
                                <div class="single-comment-box">
                                    <div class="img-box">
                                        <img src="{{$blog->author_image}}" alt="Awesome Image">
                                    </div>
                                    <div class="text-box">
                                        <div class="top-box">
                                            <h2>{{$blog->author_name}}</h2>

                                        </div>
                                        <div class="content">
                                          <p>{{$blog->author_text}}</p>
                                            <ul class="social_icon author_icon">
                                                <li><a href="#" class="tran3s" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="tran3s" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="tran3s" title="Linkedin"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="tran3s" title="Youtube"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-box">
                            <div class="theme_title ">
                                <h2>Comments (1)</h2>

                            </div>
                            <div class="single-comment-box">
                                <div class="text-box">
                                    <div class="clearfix">
                                        <div class="top-box float_left">
                                            <h2>Michel Kong</h2>
                                        </div>
                                        <div class="float_right">
                                            <span class="p_color">Posted on Aug 11.00am </span>
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <p>Mistaken idea of denouncing pleasure and praising pain was borns and I will give you a seds complete account of that system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness No one rejects, dislikes, or avoids pleasure itself, because it is pleasure explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a completed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reply-box">
                            <div class="theme_title ">
                                <h2>leave a commet</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea placeholder="Comments"></textarea>
                                </div>
                                <!-- /.col-md-12 -->
                                <div class="col-md-6">
                                    <input type="text" placeholder="Your Name*">
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" placeholder="Your Email*">
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <input type="text" placeholder="Your Website">
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <button type="submit" class="color1_bg">Post Comment</button>
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

