<?php


namespace App\Http\Controllers;





use App\Models\Aboutsection;
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
use App\Models\ParthnersLogo;
use App\Models\Product;
use App\Models\Slaider;
use App\Models\Testimonial;
use App\Models\ThreeColum;
use App\Models\WhyChoose;
use Illuminate\Http\Request;
use App\Models\Category;
class MainController extends Controller
{
    public function index() {

        $sections = Aboutsection::all();
        $products = Product::orderby('created_at', 'desc')->limit(8)->get();
        $categories =Category::all();
        $blogs = Blog::orderby('created_at', 'desc')->limit(3)->get();
        $whychoose = WhyChoose::all();
        $farmers = Farmer::all();
        $testimonials = Testimonial::all();
        $partners_logo = ParthnersLogo::all();
        $slaiders = Slaider::all();

        return view('index',compact('sections','products', 'categories','blogs','whychoose',
                                                    'farmers', 'testimonials','partners_logo','slaiders'));

    }

    public function footer() {

        $get_in_touch = GetInTouch::first();

        return view('part.footer',compact('get_in_touch'));

    }






    public function about() {
        $aboutstories = AboutStory::first();
        $three_colums = ThreeColum::all();
        $deliveries = DeliveryProcess::all();
        $awards = Award::first();
        $award_images = AwardImage::all();
        $categories = Category::all();
        $products = Product::orderby('created_at', 'desc')->limit(5)->get();;

        return view('about',compact('aboutstories','three_colums','deliveries','awards','award_images',
                                                    'categories','products'));

    }

    public function about_send_message(Request $request){

        AboutSendMessage::create($request->all());
        return redirect()->back();
    }

    public function store(Request $request) {
        $categories = \App\Models\Category::all();

        $catId = $request->get('catId',1);
        $products = Product::where('cat_id', $catId)->orderBy('id', 'desc')->get();

        return view('store',compact('products','categories'));
    }

    public function news() {
        $blogs = Blog::orderby('created_at', 'desc')->get();
        return view('news',compact('blogs'));
    }

    public function blog_details($id) {
        $blog = Blog::find($id);
        return view('blogs.blogdetails',compact('blog'));
    }

    public function blog_comment(Request $request){

        BlogComment::create($request->all());
        return redirect()->back();
    }

    public function product_details($id) {
        $product_details = Product::find($id);
        return view('store.product_details',compact('product_details'));
    }


    public function faq() {
        $faqs = Faq::all();
        return view('faq',compact('faqs'));
    }


    public function contact() {
        return view('contact');
    }

    public function category(){
        dd('category');
        return view("category");
    }







}
