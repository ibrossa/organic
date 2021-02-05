
<div class="col-md-6 col-sm-12">
    <div class="contact_in-box">
        <div class="theme-title ">
            <h2>send us message</h2>
        </div>
        <form method="post" action="\about">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="Your Name*" name="name" >
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <input type="text" placeholder="Your Email*" name="mail">
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <input type="text" placeholder="Phone" name="phone" >
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <input type="text" placeholder="Subject" name="subject">
                </div>
                <!-- /.col-md-6 -->

                <div class="col-md-12">
                    <textarea placeholder="Comments" name="text"></textarea>
                </div>
                <!-- /.col-md-12 -->
                <div class="col-md-12">
                    <button type="submit" class="color1_bg">Post Comment</button>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </form>

    </div>
</div>
