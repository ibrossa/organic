<div class="reply-box">
    <div class="theme_title ">
        <h2>leave a commet</h2>
    </div>
    <form method="post" action="\news\{{$blog->id}}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <textarea placeholder="Comments" name="comment"></textarea>
            </div>
            <!-- /.col-md-12 -->
            <div class="col-md-6">
                <input type="text" placeholder="Your Name*" name="name">
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6">
                <input type="text" placeholder="Your Email*" name="email">
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-12">
                <input type="text" placeholder="Your Website" name="website">
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-12">
                <button type="submit" class="color1_bg">Post Comment</button>
            </div>
        <!-- /.col-md-12 -->
         </div>
    <!-- /.row -->
    </form>
</div>
