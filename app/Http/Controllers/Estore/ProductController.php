<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Color;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductSize;
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
        $products = Product::where('seller_id', auth()->id())->latest()->get();
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
        $subCategories = SubCategory::where('category_id', $product->category_id)->select('id', 'name')->get();
        $childCategories = ChildCategory::where('sub_category_id', $product->subcategory_id)->select('id', 'name')->get();
        $productColors = ColorProduct::where('product_id', $product->id)->select('color_id')->get()->pluck('color_id');
        $productSizes = ProductSize::where('product_id', $product->id)->select('size_id')->get()->pluck('size_id');

        $productSize = [];
        $productColor = [];

        foreach ($productSizes as $key => $value) {

            array_push($productSize, $value);
        }

        foreach ($productColors as $key => $value) {

            array_push($productColor, $value);
        }

        $brands = Brand::select('id', 'name')->get();
        $colors = Color::select('id', 'name')->get();
        $sizes = Size::select('id', 'name')->get();

        return view('backend.seller.products.edit', compact('categories', 'subCategories', 'childCategories', 'brands', 'colors', 'sizes', 'product', 'productColor', 'productSize'));
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
