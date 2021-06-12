<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productObject;

    public function __construct()
    {
        $this->productObject = new Product();
    }

    public function index()
    {
        $products = Product::latest()->get();
        return view('backend.seller.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::select('id', 'name')->get();
        $subCategories = SubCategory::select('id', 'name')->get();
        $childCategories = ChildCategory::select('id', 'name')->get();
        $brands = Brand::select('id', 'name')->get();
        $colors = Color::select('id', 'name')->get();
        $sizes = Size::select('id', 'name')->get();

        return view('backend.seller.products.create', compact('categories', 'subCategories', 'childCategories', 'brands', 'colors', 'sizes'));
    }

    public function store(ProductRequest $request)
    {
        $this->productObject->storeProduct($request);
        return back();
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::select('id', 'name')->get();
        $subCategories = SubCategory::select('id', 'name')->get();
        $childCategories = ChildCategory::select('id', 'name')->get();
        $brands = Brand::select('id', 'name')->get();
        $colors = Color::select('id', 'name')->get();
        $sizes = Size::select('id', 'name')->get();

        return view('backend.seller.products.show', compact('categories', 'subCategories', 'childCategories', 'brands', 'colors', 'sizes', 'product'));
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::select('id', 'name')->get();
        $subCategories = SubCategory::select('id', 'name')->get();
        $childCategories = ChildCategory::select('id', 'name')->get();
        $brands = Brand::select('id', 'name')->get();
        $colors = Color::select('id', 'name')->get();
        $sizes = Size::select('id', 'name')->get();

        return view('backend.seller.products.edit', compact('categories', 'subCategories', 'childCategories', 'brands', 'colors', 'sizes', 'product'));
    }


    public function update(ProductRequest $request, $id)
    {
        $this->productObject->updateProduct($request, $id);
        return redirect()->route('seller.products.index');
    }

    public function destroy($id)
    {
        $this->productObject->destroyProduct($id);
        return back();
    }
}
