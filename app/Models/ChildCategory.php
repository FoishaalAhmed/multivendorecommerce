<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class ChildCategory extends Model
{
    protected $fillable = [
        'name', 'category_id', 'sub_category_id',
    ];

    public static $validateRule = [

        'name'            => 'required|string|max: 255',
        'category_id'     => 'required|numeric',
        'sub_category_id' => 'required|numeric',
    ];

    public function products()
    {
        return $this->belongsToMany('App\Model\Product');
    }

    public function getChildCategoriesWithCategoryAndSubCategory()
    {
        $subCategories = DB::table('child_categories')
            ->join('categories', 'child_categories.category_id', '=', 'categories.id')
            ->join('sub_categories', 'child_categories.sub_category_id', '=', 'sub_categories.id')
            ->select('sub_categories.*', 'categories.name as category', 'sub_categories.name as sub_category')
            ->orderBy('child_categories.name', 'asc')
            ->get();
        return $subCategories;
    }

    public function storeChildCategory(Object $request)
    {
        $this->name            = $request->name;
        $this->category_id     = $request->category_id;
        $this->sub_category_id = $request->sub_category_id;
        $storeChildCategory    = $this->save();

        $storeChildCategory ?
            session()->flash('message', 'Child Category Created Successfully!') :
            session()->flash('message', 'Something Went Wrong!');
    }

    public function updateChildCategory(Object $request, Int $id)
    {
        $category = $this::findOrFail($id);
        $category->name            = $request->name;
        $category->category_id     = $request->category_id;
        $category->sub_category_id = $request->sub_category_id;
        $updateChildCategory       = $category->save();

        $updateChildCategory ?
            session()->flash('message', 'Child Category Updated Successfully!') :
            session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyChildCategory(Int $id)
    {
        $category = $this::findOrFail($id);
        $deleteChildCategory = $category->delete();

        $deleteChildCategory ?
            session()->flash('message', 'Child Category Deleted Successfully!') :
            session()->flash('message', 'Something Went Wrong!');
    }
}
