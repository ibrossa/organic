<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/template/organic_store/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 10:04:37 GMT -->
<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Organic Store | Responsive HTML5 Template</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">



    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">



    <!-- Fixing Internet Explorer ______________________________________-->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="vendor/html5shiv.js"></script>
    <script src="/js/app.js"></script>
    <![endif]-->
</head>



<body>
<div class="main_page">


    <!-- Header *******************************  -->
    <header>
        <div class="top_header">
            <div class="container">
                <div class="pull-left header_left">
                    <ul>
                        <li><a href="#">Order On Phone: <span>+321 453 68 739</span></a></li>
                        <li><i class="fa fa-envelope-o s_color" aria-hidden="true"></i><a href="#">organicstore@gmail.com</a></li>
                    </ul>
                </div>
            </div> <!-- End of .container -->
        </div> <!-- End of .top_header -->

        <div class="bottom_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="search-box">
                            <form action="#" class="clearfix">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-6 logo-responsive">
                        <div class="logo-area">
                            <a href="\" class="pull-left logo"><img src="images/logo/logo.png" alt="LOGO"></a>
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
                    <li><a href="\about">About us</a></li>
                    <li><a href="\store">store</a></li>
                    <li><a href="\news">News</a></li>
                    <li><a href="\faq">FAQ</a></li>
                    <li><a href="\contact">Contact us</a></li>
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

@yield('content')
