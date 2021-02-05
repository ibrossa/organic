@extends('layouts.app')

@section('content')

<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1>News Standard</h1>
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
                        <li>News Standard</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-7">
                    <p>We provide <span>100% organic</span> products</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="news single_news_page style-2">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-4 col-sm-6 col-xs-12">
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
                        <ul>
                            <li><a href="/news/blogdetails" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
                            <li><a href="/news/blogdetails" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$blog->created_at}}</a></li>
                            <li><a href="/news/blogdetails" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i> 26</a></li>
                        </ul>
                        <div class="text">
                            <h4><a href="{{route('news.blog_details', $blog->id)}}">{{$blog->title}}</a></h4>
                            <p>{{$blog->description}}</p>
                            <div class="link"><a href="{{route('news.blog_details', $blog->id)}}" class="tran3s">READ MORE<span class="fa fa-sort-desc"></span></a></div>

                        </div>

                    </div> <!-- End of .post -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
