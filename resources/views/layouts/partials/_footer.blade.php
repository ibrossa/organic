<section class="call-out">
    <div class="container">
        <div class="float_left">
            <h2>Subscribe For Newsletter</h2>
            <p>We send you latest news couple a month ( No Spam).</p>
        </div>
        <div class="float_right">
            <div class="contact-box">

                <form method="post" action="\" class="contact-form" >
                    @csrf
                    <div class="row clearfix">
                        <div class="form-group">
                            <input type="text" name="name"  placeholder="Your Name*"><i class="fa fa-user" ></i>
                            @error('name')
                                <div class="alert alert-danger">{{$message}} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="email" name="email"  placeholder="Email Address*"><i class="fa fa-envelope" ></i>
                            @error('email')
                                <div class="alert alert-danger">{{$message}} </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <button type="submit"  class="btn-style-one center">Submit now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer************************* -->
<footer>
    <div class="main_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_logo">
                    <a href="{{route('index')}}"><img src="{{Voyager::image(setting('footer.footer_logo'))}}" alt="Logo"></a>
                    {!! setting('footer.footer_text') !!}



                </div> <!-- End of .footer_logo -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_news">
                    <h5>recent post</h5>

                    <div class="recent-posts">
                        @foreach($footer_blog as $blog)
                        <div class="post">
                            <div class="post-thumb"><a href="{{route('news.blog_details',$blog->id)}}"><img src="{{Voyager::image($blog->image)}}" alt=""></a></div>
                            <h4><a href="{{route('news.blog_details', $blog->id)}}">{{$blog->title}}</a></h4>
                            <div class="post-info"><i class="fa fa-clock-o"></i>{{$blog->created_at}}</div>
                        </div>
                        @endforeach
                    </div>
                </div> <!-- End of .footer_news -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_subscribe">
                    <h5>Categoreis</h5>
                    <ul class="list catagories">
                        @foreach($footer_category as $category)
                            <li><a href="{{route('store_category', $category->id)}}"><i class="fa fa-angle-right"></i>{{$category->title}}</a></li>
                        @endforeach
                    </ul>
                </div> <!-- End of .footer_subscribe -->


                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_contact">
                    <h5>{{setting('contact-us.contact_us')}}</h5>
                    <ul class="list catagories">
                        <li><a href="#"><i class="fa fa-envelope"></i>{{setting('contact-us.email')}}</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>{{setting('contact-us.phone')}}</a></li>
                        <li><a href="#"><i class="fa fa-home"></i>{{setting('contact-us.addres')}}.</a></li>
                    </ul>

                    <h5>{{setting('contact-us.business_hours')}}</h5>
                    <div class="list Business">
                        <p>{{setting('contact-us.work_hours')}}<br><span>{{setting('contact-us.sunday')}}</span></p>
                    </div>

                </div> <!-- End of .footer_contact -->
            </div>
        </div>
    </div> <!-- End of .main_footer -->

    <div class="bottom_footer clear_fix">
        <div class="container">

            <ul class="social_icon pull-right">
                <li><a href="#" class="tran3s"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                <li><a href="#" class="tran3s"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></li>
                <li><a href="#" class="tran3s"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
                <li><a href="#" class="tran3s"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a></li>
                <li><a href="#" class="tran3s"><i class="fa fa-cc-discover" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>


<!-- Scroll Top Button -->
<button class="scroll-top tran3s color2_bg">
    <span class="fa fa-angle-up"><img src="images/team/up.png"></span>
</button>
<!-- pre loader  -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>




<!-- Js File_________________________________ -->

<!-- j Query -->
<script type="text/javascript" src="/js/jquery-2.1.4.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>

<!-- Vendor js _________ -->
<!-- Google map js -->
<script src="/https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> <!-- Gmap Helper -->
<script src="/js/gmap.js"></script>
<!-- owl.carousel -->
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<!-- ui js -->
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<!-- Responsive menu-->
<script type="text/javascript" src="js/menuzord.js"></script>
<!-- revolution -->
<script src="/vendor/revolution/jquery.themepunch.tools.min.js"></script>
<script src="/vendor/revolution/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/vendor/revolution/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/vendor/revolution/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/vendor/revolution/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/vendor/revolution/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="/vendor/revolution/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/vendor/revolution/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="/vendor/revolution/revolution.extension.migration.min.js"></script>

<!-- landguage switcher js -->
<script type="text/javascript" src="/js/jquery.polyglot.language.switcher.js"></script>
<!-- Fancybox js -->
<script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
<!-- js count to -->
<script type="text/javascript" src="/js/jquery.appear.js"></script>
<script type="text/javascript" src="/js/jquery.countTo.js"></script>
<!-- WOW js -->
<script type="text/javascript" src="/js/wow.min.js"></script>

<script type="text/javascript" src="/js/SmoothScroll.js"></script>

<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/jquery.mixitup.min.js"></script>
<!-- Theme js -->
<script type="text/javascript" src="/js/theme.js"></script>
<script type="text/javascript" src="/js/google-map.js"></script>

</div> <!-- End of .main_page -->
</body>

<!-- Mirrored from st.ourhtmldemo.com/template/organic_store/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 10:07:28 GMT -->
</html>

