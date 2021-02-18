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
                    <form method="post" action="{{route('contact_send_message')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Name*" id="contact_name" name="name">
                                @error('name')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Email*" name="email" id="contact_email">
                                @error('email')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone" name="phone" id="contact_phone">
                                @error('phone')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject" name="subject" id="contact_subject">
                                @error('subject')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Comments" name="text" id="contact_comment"></textarea>
                                @error('text')
                                <div class="alert alert-danger">{{$message}} </div>
                                @enderror
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <button type="button" id="contact_button" class="color1_bg">Post Comment</button>
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
<!-- Gmap Helper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>

<script>
    const contact_button = document.getElementById('contact_button');
    console.log(contact_button);
    contact_button.addEventListener('click', function () {
        const data = {
            name: document.querySelector('#contact_name').value,
            email: document.querySelector('#contact_email').value,
            phone: document.querySelector('#contact_phone').value,
            subject: document.querySelector('#contact_subject').value,
            text: document.querySelector('#contact_comment').value
        };
        console.log(data);
        axios.post('{{route('contact_send_message')}}', data).then(document.location.reload());


    })

</script>
@endsection

