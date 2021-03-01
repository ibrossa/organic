<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/template/organic_store/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 10:04:37 GMT -->
<head>
  {{--  {!! $og->renderTags() !!}--}}

   {{-- <meta name="description" content="{{ $page->meta_descriptions }}">--}}
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  {{--  <title>{{$page->meta_title ?? ''}}</title>--}}
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
<script>
    //Subscription ajax
    const button = document.getElementById('subscription_button');
    console.log(button);
    button.addEventListener('click', function () {
        const data = {
            name: document.querySelector('#subscribe_name').value,
            email: document.querySelector('#subscribe_email').value
        };

        axios.post('{{route('subscribe')}}', data).then(function(response) {
            const wrappers = document.querySelectorAll('.error_wrapper');

            for (let i = 0; i < wrappers.length; i++) {
                if (!wrappers[i].classList.contains('hidden')) {
                    wrappers[i].classList.add('hidden')
                }
            }

        }).catch(function(err) {
            const errors = err.response.data.errors;

            for (let field in errors) {
                let message_array_errors = errors[field];
                for (let index in message_array_errors) {
                    let message_error = errors[field][index];
                    let error_wrapper = document.querySelector('#' + field + '_error_wrapper');
                    error_wrapper.classList.remove('hidden');
                    error_wrapper.innerHTML = message_error;
                }
            }
        })
    })
</script>
</body>
</html>
