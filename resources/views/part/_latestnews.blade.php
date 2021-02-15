<<section class="news">
    <div class="container">
        <div class="theme_title center">
            <h3>{{setting('main.news_title')}}</h3>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="img_holder">
                        <img src="{{Voyager::image($blog->image)}}" alt="News" class="img-responsive">
                        <div class="opacity tran3s">
                            <div class="icon">
                                <span><a href="{{route('news.blog_details', $blog->id)}}" class="border_round">+</a></span>
                            </div> <!-- End of .icon -->
                        </div> <!-- End of .opacity -->
                    </div> <!-- End of .img_holder -->
                    <div class="post">
                        <ul>
                            <li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
                            <li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$blog->created_at}}</a></li>
                            <li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i>{{$blog->blog_comments->count()}}</a></li>
                        </ul>
                        <div class="text">
                            <h4><a href="{{route('news.blog_details', $blog->id)}}}">{{$blog->title}}</a></h4>
                            <p>{!! $blog->description !!}</p>
                            <div class="link"><a href="{{route('news.blog_details', $blog->id)}}" class="tran3s">READ MORE<span class="fa fa-sort-desc"></span></a></div>

                        </div>

                    </div> <!-- End of .post -->
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>
