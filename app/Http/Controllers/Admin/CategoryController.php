<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryObject;
    public function __construct()
    {
        $this->categoryObject = new Category();
    }

    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.admin.category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate(Category::$validateRule);
        $this->categoryObject->storeCategory($request);
        return back();
    }

    public function edit($id)
    {
        $category   = Category::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.admin.category', compact('categories', 'category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(Category::$validateRule);
        $this->categoryObject->updateCategory($request, $id);
        return redirect()->route('admin.categories.index');
    }

    public function destroy($id)
    {
        $this->categoryObject->destroyCategory($id);
        return back();
    }
}
