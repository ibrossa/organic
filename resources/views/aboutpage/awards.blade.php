<section class="award">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="award-info">
                    <div class="theme_title">
                        <h2>{{setting('about-page.awards')}}</h2>
                    </div>
                </div>
                <div class="text">
                    <p>{!! setting('about-page.awards_text') !!}</p>
                </div>
                <div class="award-logo">
                    <ul>
                        @foreach($award_images as $image)
                        <li><img src="{{Voyager::image($image->image)}}" alt=""></li>
                        @endforeach
                    </ul>
                </div>
                <div class="customer-text">
                    {!! setting('about-page.Awards_support') !!}
                    {!! setting('about-page.ofice_hours') !!}
                </div>
            </div>
           @include('aboutpage.send_message')
        </div>
    </div>
</section>
