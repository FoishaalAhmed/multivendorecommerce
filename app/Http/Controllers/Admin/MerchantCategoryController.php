<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MerchantCategoryRequest;
use App\Models\MerchantCategory;

class MerchantCategoryController extends Controller
{
    private $merchantCategoryObject;

    public function __construct()
    {
        $this->merchantCategoryObject = new MerchantCategory();
    }

    public function index()
    {
        $merchants = MerchantCategory::all();
        return view('backend.admin.merchantCategory.index', compact('merchants'));
    }

    public function create()
    {
        return view('backend.admin.merchantCategory.create');
    }

    public function store(MerchantCategoryRequest $request)
    {
        $this->merchantCategoryObject->storeMerchantCategory($request);
        return back();
    }

    public function edit($id)
    {
        $category = MerchantCategory::findOrFail($id);
        return view('backend.admin.merchantCategory.edit', compact('category'));
    }

    public function update(MerchantCategoryRequest $request, $id)
    {
        $this->merchantCategoryObject->updateMerchantCategory($request, $id);
        return redirect()->route('admin.merchant-categories.index');
    }

    public function destroy($id)
    {
        $this->merchantCategoryObject->destroyMerchantCategory($id);
        return back();
    }
}
