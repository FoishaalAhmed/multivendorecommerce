<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $subCategoryObject;
    public function __construct()
    {
        $this->subCategoryObject = new SubCategory();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories = $this->subCategoryObject->getSubCategoriesWithCategory();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.admin.subCategory', compact('subCategories', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(SubCategory::$validateRule);
        $this->subCategoryObject->storeSubCategory($request);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subCategory   = SubCategory::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->get();
        $subCategories = $this->subCategoryObject->getSubCategoriesWithCategory();
        return view('backend.admin.subCategory', compact('categories', 'subCategory', 'subCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(SubCategory::$validateRule);
        $this->subCategoryObject->updateSubCategory($request, $id);
        return redirect()->route('admin.sub-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->subCategoryObject->destroySubCategory($id);
        return back();
    }
}
