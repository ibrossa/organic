<section class="award">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="award-info">
                    <div class="theme_title">
                        <h2>{{$awards->title}}</h2>
                    </div>
                </div>
                <div class="text">
                    <p>{{$awards->text}}</p>
                </div>
                <div class="award-logo">
                    <ul>
                        @foreach($award_images as $image)
                        <li><img src="{{$image->image}}" alt=""></li>
                        @endforeach
                    </ul>

                </div>
                <div class="customer-text">
                    <p><b>Customer Support:</b>{{$awards->sup_text}}</p>
                    <p><b>Office Hours :</b>{{$awards->off_text}}</p>
                </div>
            </div>
           @include('aboutpage.send_message')
        </div>
    </div>
</section>
