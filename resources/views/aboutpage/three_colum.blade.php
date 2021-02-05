<section class="three-column">
    <div class="contaner-fluid">
        <div class="row">
            @foreach($three_colums as $colum)
            <div class="col-md-4 col-sm-12 col-xs-12 color1_bg text-center">
                <div class="single-item ">
                    <h5>{{$colum->title}}</h5>
                    <div class="icon"><i class="{{$colum->image}}"></i></div>
                    <p>{{$colum->text}}</p>
                    <div class="link"><a href="#">Shop Now</a></div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
