<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Page;
use App\Traits\HasOpenGraph;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use HasOpenGraph;
    /**
     *
     */
    public function news()
    {
        $blogs = Blog::active()->orderby('created_at', 'desc')->paginate(6);
        $page = Page::where('slug','news')->first();
        $og = $this->returnOG($page);

        return view('news', compact('blogs','page','og'));
    }

    /**
     *
     */
    public function blog_details($id)
    {
        $blog = Blog::find($id);
        $comments = Blog::find($id)->blog_comments;
        $og = $this->returnOGPost($blog);
        $page = $blog;

        return view('blogs.blogdetails', compact('blog', 'comments','og','page'));
    }

    /**
     *
     */
    public function blog_comment($id, CommentRequest $request)
    {
        $data = $request->validated();
        $data['blog_id'] = $id;
        BlogComment::create($data);

        return redirect()->back();
    }
}
