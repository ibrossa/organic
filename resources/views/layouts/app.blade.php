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
    <script src="/http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="/vendor/html5shiv.js"></script>
    <script src="/js/app.js"></script>
    <![endif]-->
</head>


<body>
@include('layouts.partials._header')

<div id="main">
    @yield('content')
</div>

@include('layouts.partials._footer')
</body>
</html>
