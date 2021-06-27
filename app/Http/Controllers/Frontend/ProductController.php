<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ChildCategory;
use App\Models\Product;
use App\Models\ProductPhoto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products($id)
    {
        $category = ChildCategory::findOrFail($id);
        $products  = Product::where('child_category_id', $id)->get();
        return view('frontend.products', compact('products', 'category'));
    }

    public function product($slug)
    {
        $product  = Product::where('slug', $slug)->firstOrFail();
        $productPhotos = ProductPhoto::where('product_id', $product->id)->get();
        $relatedProducts = Product::where('child_category_id', $product->child_category_id)->where('id', '!=', $product->id)->take(6)->get();
        return view('frontend.product', compact('product', 'relatedProducts', 'productPhotos'));
    }
}
