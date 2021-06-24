<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EstoreCategoryRequest;
use App\Models\EstoreCategory;

class estoreCategoryController extends Controller
{
    private $estoreCategoryObject;

    public function __construct()
    {
        $this->estoreCategoryObject = new EstoreCategory();
    }

    public function index()
    {
        $estores = estoreCategory::all();
        return view('backend.admin.estoreCategory.index', compact('estores'));
    }

    public function create()
    {
        return view('backend.admin.estoreCategory.create');
    }

    public function store(EstoreCategoryRequest $request)
    {
        $this->estoreCategoryObject->storeEstoreCategory($request);
        return back();
    }

    public function edit($id)
    {
        $category = EstoreCategory::findOrFail($id);
        return view('backend.admin.estoreCategory.edit', compact('category'));
    }

    public function update(EstoreCategoryRequest $request, $id)
    {
        $this->estoreCategoryObject->updateEstoreCategory($request, $id);
        return redirect()->route('admin.estore-categories.index');
    }

    public function destroy($id)
    {
        $this->estoreCategoryObject->destroyEstoreCategory($id);
        return back();
    }
}
