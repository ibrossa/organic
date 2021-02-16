<?php


namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Requests\ProductReviewRequest;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\SendUsRequest;
use App\Http\Requests\SuscribeRequest;
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
use App\Models\Offer;
use App\Models\ParthnersLogo;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\SecondHeader;
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
        $offers = Offer::latest()->get();
        $latest_products = Product::active()->get();
        $categories = Category::active()->get();
        $latest_posts = Blog::active()->latest()->limit(3)->get();
        $why_choose = WhyChoose::active()->get();
        $farmers = Farmer::active()->get();
        $testimonials = Testimonial::active()->get();
        $partners_logo = ParthnersLogo::active()->get();
        $slaider_first = Slaider::where('id', 1)->active()->get();
        $slaider_second = Slaider::where('id', 2)->active()->get();
        $slaider_third = Slaider::where('id', 3)->active()->get();

        return view('index',
            compact(
                'offers', 'latest_products', 'categories', 'latest_posts', 'why_choose',
                'farmers', 'testimonials', 'partners_logo', 'slaider_first',
                'slaider_second', 'slaider_third')
        );
    }

    /**
     *
     */
    public function search(SearchRequest $request)
    {
        $search = $request->s;
        $blogs = Blog::query()
            ->where('title', 'LIKE', '%' . $search . '%')
            ->active()
            ->get();
        $products = Product::query()
            ->where('title', 'LIKE', '%' . $search . '%')
            ->active()
            ->get();

        return view('search', compact('blogs', 'search', 'products'));
    }

    /**
     *
     */
    public function index_subscribe(SuscribeRequest $request)
    {
        $data = $request->validated();
        Subscribe::create($data);

        return redirect()->back();
    }


    /**
     *
     */
    public function about()
    {
        $category_description = ThreeColum::latest()->get();
        $deliveries = DeliveryProcess::oldest()->get();
        $award_images = AwardImage::latest()->get();
        $categories = Category::active()->get();
        $products = Product::active()->latest()->limit(5)->get();
        $second_header = SecondHeader::where('title','about us')->get();

        return view('about', compact('category_description', 'deliveries',
            'award_images', 'categories', 'products','second_header'
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
        $categories = Category::active()->get();
        $products = Product::active()->get();
        if ($request->has('catId')) {
            $catId = $request->get('catId', 1);
            $products = Product::where('category_id', $catId)->orderBy('id', 'desc')->get();
        }
        if ($request->has('min')) {
            $min = $request->get('min');
            $max = $request->get('max');
            $products = Product::query()->whereBetween('price', [$min, $max])->get();
        }
        $search = $request->search_product;
        $products = Product::query()
            ->where('title', 'LIKE', '%' . $search . '%')
            ->active()
            ->get();


        $hot_products = Product::active()->where('flag', 'hot')->orderby('created_at', 'desc')->limit(3)->get();
        $second_header = SecondHeader::where('title','our store')->get();

        return view('store', compact('products', 'categories', 'hot_products','second_header'));
    }

    /**
     *
     */
    public function news()
    {
        $blogs = Blog::active()->orderby('created_at', 'desc')->paginate(3);
        $second_header = SecondHeader::where('title','News Standard')->get();

        return view('news', compact('blogs','second_header'));
    }

    /**
     *
     */
    public function blog_details($id)
    {
        $blog = Blog::find($id);
        $comments = Blog::find($id)->blog_comments;

        return view('blogs.blogdetails', compact('blog', 'comments'));
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

    /**
     *
     */
    public function product_details($id)
    {
        $product = Product::find($id);
        $reviews = Product::find($id)->product_review;
        $related = Product::where('category_id', $product->category_id)->limit(3)->get();

        $related = $related->filter(function ($item) use ($product) {
            return $item->id != $product->id;
        });

        return view('store.product_details', compact('product', 'reviews', 'related'));
    }

    /**
     *
     */
    public function product_review($id, ProductReviewRequest $request)
    {
        $data = $request->validated();
        $data['product_id'] = $id;
        ProductReview::create($data);

        return redirect()->back();
    }

    /**
     *
     */
    public function faq()
    {
        $faqs = Faq::active()->latest()->get();
        $second_header = SecondHeader::where('title','faq\'s')->get();

        return view('faq', compact('faqs','second_header'));
    }

    /**
     *
     */
    public function contact()
    {
        $second_header = SecondHeader::where('title','Contact us')->get();

        return view('contact',compact('second_header'));
    }


}
