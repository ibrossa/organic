<?php


namespace App\Http\Controllers;


use App\Http\Requests\SearchRequest;
use App\Http\Requests\SendUsRequest;
use App\Http\Requests\SuscribeRequest;
use App\Models\AboutSendMessage;
use App\Models\AwardImage;
use App\Models\Blog;
use App\Models\DeliveryProcess;
use App\Models\Faq;
use App\Models\Farmer;
use App\Models\Offer;
use App\Models\Page;
use App\Models\ParthnersLogo;
use App\Models\Product;
use App\Models\Slaider;
use App\Models\Subscribe;
use App\Models\Testimonial;
use App\Models\ThreeColum;
use App\Models\WhyChoose;
use App\Traits\HasOpenGraph;
use ChrisKonnertz\OpenGraph\OpenGraphFacade;
use App\Models\Category;

class MainController extends Controller
{
    use HasOpenGraph;

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
        $page = Page::where('slug','home')->first();
        $og = $this->returnOG($page);

        return view('index',
            compact(
                'offers', 'latest_products', 'categories', 'latest_posts', 'why_choose',
                'farmers', 'testimonials', 'partners_logo', 'slaider_first',
                'slaider_second', 'slaider_third','og','page')
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
        $og = OpenGraphFacade::siteName('Organic');
        return view('search', compact('blogs', 'search', 'products','og'));
    }

    /**
     * @param SuscribeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function subscribe(SuscribeRequest $request)
    {
        $subscription = Subscribe::create($request->validated());

        return response()->json($subscription);
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
        $page = Page::where('slug','about-us')->first();
        $og = $this->returnOG($page);

        return view('about', compact('category_description', 'deliveries',
            'award_images', 'categories', 'products','page','og'
        ));

    }

    /**
     *
     */
    public function about_send_message(SendUsRequest $request)
    {
        AboutSendMessage::create($request->validated());

        return redirect()->back();
    }

    /**
     *
     */
    public function contact_send_message(SendUsRequest $request)
    {
        $send_message =  AboutSendMessage::create($request->validated());

        return response()->json($send_message);
    }




    /**
     *
     */
    public function faq()
    {
        $faqs = Faq::active()->latest()->get();
        $page = Page::where('slug','faq')->first();
        $og = $this->returnOG($page);

        return view('faq', compact('faqs','page','og'));
    }

    /**
     *
     */
    public function contact()
    {
        $page = Page::where('slug','contact-us')->first();
        $og = $this->returnOG($page);
        $metateg = $page->meta_tags;


        return view('contact',compact('page','og'));
    }


}
