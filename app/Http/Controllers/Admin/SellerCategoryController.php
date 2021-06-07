<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SellerCategoryRequest;
use App\Models\SellerCategory;
use Illuminate\Http\Request;

class SellerCategoryController extends Controller
{
    private $sellerCategoryObject;

    public function __construct()
    {
        $this->sellerCategoryObject = new SellerCategory();
    }
    
    public function index()
    {
        $sellers = SellerCategory::all();
        return view('backend.admin.sellerCategory.index', compact('sellers'));
    }

    public function create()
    {
        return view('backend.admin.sellerCategory.create');
    }

    public function store(SellerCategoryRequest $request)
    {
        $this->sellerCategoryObject->storeSellerCategory($request);
        return back();
    }

    public function edit($id)
    {
        $category = SellerCategory::findOrFail($id);
        return view('backend.admin.sellerCategory.edit', compact('category'));
    }

    public function update(SellerCategoryRequest $request, $id)
    {
        $this->sellerCategoryObject->updateSellerCategory($request, $id);
        return redirect()->route('admin.seller-categories.index');
    }

    public function destroy($id)
    {
        $this->sellerCategoryObject->destroySellerCategory($id);
        return back();
    }
}
