<div class="reply-box">
    <div class="theme_title ">
        <h2>leave a comment</h2>
    </div>
    <form method="post" action="\news\{{$blog->id}}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <textarea placeholder="Comments" name="comment"></textarea>
                @error('comment')
                    <div class="alert alert-danger">{{$message}} </div>
                @enderror
            </div>
            <!-- /.col-md-12 -->
            <div class="col-md-6">
                <input type="text" placeholder="Your Name*" name="name">
                @error('name')
                 <div class="alert alert-danger">{{$message}} </div>
                @enderror
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6">
                <input type="text" placeholder="Your Email*" name="email">
                @error('email')
                 <div class="alert alert-danger">{{$message}} </div>
                @enderror
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-12">
                <input type="text" placeholder="Your Website" name="website">
                @error('website')
                    <div class="alert alert-danger">{{$message}} </div>
                @enderror
            </div>
            <input type="text" value="HELLO WORLD!" name="mySuperAwesomeField" />

            <!-- /.col-md-6 -->
            <div class="col-md-12">
                <button type="submit" class="color1_bg">Post Comment</button>
            </div>
        <!-- /.col-md-12 -->
         </div>
    <!-- /.row -->
    </form>
</div>
