<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductReviewRequest;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductReview;
use App\Traits\HasOpenGraph;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use HasOpenGraph;
    /**
     *
     */
    public function store(Request $request)
    {
        $categories = Category::active()->get();
        $products = Product::active()->get();
        if ($request->has('catId')) {
            $catId = $request->get('catId');
            $products = Product::where('category_id', $catId)->orderBy('id', 'desc')->get();
        }
        if ($request->has('min')) {
            $min = $request->get('min');
            $max = $request->get('max');
            $products = Product::query()->whereBetween('price', [$min, $max])->get();
        }
        if($request->has('search_product')) {
            $search = $request->search_product;
            $products = Product::query()
                ->where('title', 'LIKE', '%' . $search . '%')
                ->active()
                ->get();
        }
        $hot_products = Product::active()->where('flag', 'hot')->orderby('created_at', 'desc')->limit(3)->get();
        $page = Page::where('slug','store')->first();
        $og = $this->returnOG($page);

        return view('store', compact('products', 'categories',
                                        'hot_products','page','og'));
    }
    /**
     *
     */
    public function product_details($id)
    {
        $product = Product::find($id);
        $og = $this->returnOGProduct($product);
        $reviews = Product::find($id)->product_review;
        $related = Product::where('category_id', $product->category_id)->limit(3)->get();

        $related = $related->filter(function ($item) use ($product) {
            return $item->id != $product->id;
        });
        $page = $product;

        return view('store.product_details', compact('product', 'reviews', 'related','og','page'));
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
}
