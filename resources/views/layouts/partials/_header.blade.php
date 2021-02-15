<div class="main_page">


    <!-- Header *******************************  -->
    <header>
        <div class="top_header">
            <div class="container">
                <div class="pull-left header_left">
                    <ul>
                        <li><a href="#"><span>{{setting('header.phone')}}</span></a></li>
                        <li><i class="fa fa-envelope-o s_color" aria-hidden="true"></i><a href="#">{{setting('header.organic_mail')}}</a></li>
                    </ul>
                </div>
            </div> <!-- End of .container -->
        </div> <!-- End of .top_header -->

        <div class="bottom_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="search-box">
                            <form action="{{route('search')}}"  method="get">
                                <input type="text" placeholder="Search..." id="s" name="s">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-6 logo-responsive">
                        <div class="logo-area">
                            <a href="{{route('index')}}" class="pull-left logo"><img src="/images/logo/logo.png" alt="LOGO"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-7 col-xs-6 pdt-14">

                    </div>

                </div>

            </div>
        </div> <!-- End of .bottom_header -->
    </header>





    <!-- Menu ******************************* -->
    <div class="theme_menu color1_bg">
        <div class="container">
            <nav class="menuzord pull-left" id="main_menu">
                <ul class="menuzord-menu">
                    <li class="current_page"><a href="\">Home</a></li>
                    <li><a href="{{route('about')}}">About us</a></li>
                    <li><a href="{{route('store')}}">store</a></li>
                    <li><a href="{{route('news')}}">News</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{route('contact')}}">Contact us</a></li>
                    <li><a href="{{route('cart')}}">Cart</a></li>
                </ul> <!-- End of .menuzord-menu -->
            </nav> <!-- End of #main_menu -->


            <!-- ******* Cart And Search Option ******** -->
            <div class="nav_side_content pull-right">
                <ul class="icon_header">
                    <li class="border_round tran3s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="border_round tran3s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="border_round tran3s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="border_round tran3s"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div> <!-- End of .nav_side_content -->

        </div> <!-- End of .conatiner -->
    </div> <!-- End of .theme_menu -->

