<?php


namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Requests\ProductReviewRequest;
use App\Http\Requests\SendUsRequest;
use App\Models\AboutSendMessage;
use App\Models\AboutStory;
use App\Models\Award;
use App\Models\AwardImage;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\DeliveryProcess;
use App\Models\Faq;
use App\Models\Farmer;
use App\Models\GetInTouch;
use App\Models\IndexAbout;
use App\Models\ParthnersLogo;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\Slaider;
use App\Models\Subscribe;
use App\Models\Testimonial;
use App\Models\ThreeColum;
use App\Models\WhyChoose;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Mixed_;
use function React\Promise\all;

class MainController extends Controller
{
     /**
     *
     */
    public function index()
    {
        $sections = IndexAbout::ordered('desc')->get();
        $products = Product::orderby('created_at', 'desc')->limit(8)->get();
        $categories =Category::all();
        $blogs = Blog::orderby('created_at', 'desc')->limit(3)->get();
        $whychoose = WhyChoose::all();
        $farmers = Farmer::all();
        $testimonials = Testimonial::all();
        $partners_logo = ParthnersLogo::all();
        $slaiders = Slaider::all();

        return view('index',
            compact(
            'sections','products', 'categories','blogs','whychoose',
                                                    'farmers', 'testimonials','partners_logo','slaiders'));
    }
    /**
     *
     */
    public function search(Request $request){
        $s = $request->s;
        if(!empty($s)){
            $blogs = Blog::query()->where('title', 'LIKE', '%'.$s.'%')->get();
            $products = Product::query()->where('title', 'LIKE', '%'.$s.'%')->get();

            return view('search', compact('blogs','s','products'));
        }
        else
            echo 'Nothig to Search';

        return redirect()->back();

    }

    /**
     *
     */
    public function index_subscribe(Request $request)
    {
        Subscribe::create($request->all());

        return redirect()->back();
    }


    /**
     *
     */
    public function about()
    {
        $aboutstories = AboutStory::first();
        $three_colums = ThreeColum::all();
        $deliveries = DeliveryProcess::all();
        $awards = Award::first();
        $award_images = AwardImage::all();
        $categories = Category::all();
        $products = Product::orderby('created_at', 'desc')->limit(5)->get();;

        return view('about',compact('aboutstories','three_colums','deliveries','awards',
                                                    'award_images','categories','products'
                                         ));

    }

    /**
     *
     */
    public function about_send_message(SendUsRequest $request)
    {
        $data = $request->validated();
        AboutSendMessage::create($data);

        return redirect()->back();
    }

    /**
     *
     */
    public function contact_send_message(SendUsRequest $request)
    {
        $data = $request->validated();
        AboutSendMessage::create($data);

        return redirect()->back();
    }

    /**
     *
     */
    public function store(Request $request)
    {
        $categories = Category::all();
        $products =Product::all();
        if($request->has('catId')) {
            $catId = $request->get('catId', 1);
            $products = Product::where('category_id', $catId)->orderBy('id', 'desc')->get();
        }
        if($request->has('min')) {
            $min = $request->get('min');
            $max = $request->get('max');
            $products = Product::query()->whereBetween('price', [$min,$max])->get();
        }


        $hot_products = Product::where('status', 'hot')->orderby('created_at', 'desc')->limit(3)->get();

        return view('store', compact('products','categories','hot_products'));
    }

    /**
     *
     */
    public function news()
    {
        $blogs = Blog::orderby('created_at', 'desc')->paginate(3);

        return view('news', compact('blogs'));
    }

    /**
     *
     */
    public function blog_details($id)
    {
        $blog = Blog::find($id);
        $comments = Blog::find($id)->blog_comments;
        /*dd($comments);*/
       /* $comments = BlogComment::orderby('created_at','desc')->get();*/

        return view('blogs.blogdetails', compact('blog','comments'));
    }

    /**
     *
     */
    public function blog_comment($id, CommentRequest $request)
    {
        $data = $request->validated();
        $data['blog_id'] = $id;
        $blog_comment = BlogComment::create($data);

        return redirect()->back();
    }

    /**
     *
     */
    public function product_details($id)
    {
        $product = Product::find($id);
        $reviews = Product::find($id)->product_review;
        $related = Product::where('category_id',$product->category_id)->limit(3)->get();

        $related = $related->filter(function ($item) use ($product){
            return $item->id !=$product->id;
        });

        return view('store.product_details',compact('product','reviews','related'));
    }

    /**
     * @param $id
     * @param CommentRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function product_review($id, ProductReviewRequest $request)
    {
        $data = $request->validated();
        $data['product_id'] = $id;
        $product_review = ProductReview::create($data);

        return redirect()->back();
    }

    /**
     *
     */
    public function faq()
    {
        $faqs = Faq::all();

        return view('faq',compact('faqs'));
    }

    /**
     *
     */
    public function contact()
    {
        return view('contact');
    }










}
