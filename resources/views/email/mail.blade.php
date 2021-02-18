<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>New Post Add</h1>
<h1>{{$blog->title}}</h1>
<img src="{{Voyager::image($blog->image)}}">
<a href="{{route('news.blog_details', $blog->id)}}" class="tran3s">READ MORE</a>
</body>
</html>
