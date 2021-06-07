<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class SubCategory extends Model
{
    protected $fillable = [
        'name', 'category_id',
    ];

    public static $validateRule = [

        'name'        => 'required|string|max: 255',
        'category_id' => 'required|numeric',
    ];

    public function products()
    {
        return $this->belongsToMany('App\Model\Product');
    }

    public function getSubCategoriesWithCategory()
    {
        $subCategories = DB::table('sub_categories')
                             ->join('categories', 'sub_categories.category_id', '=', 'categories.id')
                             ->select('sub_categories.*', 'categories.name as category')
                             ->orderBy('sub_categories.name', 'asc')
                             ->get();
        return $subCategories;
    }

    public function storeSubCategory(Object $request)
    {
        $this->name        = $request->name;
        $this->category_id = $request->category_id;
        $storeSubCategory     = $this->save();

        $storeSubCategory ?
            session()->flash('message', 'Sub Category Created Successfully!') :
            session()->flash('message', 'Something Went Wrong!');
    }

    public function updateSubCategory(Object $request, Int $id)
    {
        $category = $this::findOrFail($id);
        $category->name        = $request->name;
        $category->category_id = $request->category_id;
        $updateSubCategory        = $category->save();

        $updateSubCategory ?
            session()->flash('message', 'Sub Category Updated Successfully!') :
            session()->flash('message', 'Something Went Wrong!');
    }

    public function destroySubCategory(Int $id)
    {
        $category = $this::findOrFail($id);
        $deleteSubCategory = $category->delete();

        $deleteSubCategory ?
            session()->flash('message', 'Sub Category Deleted Successfully!') :
            session()->flash('message', 'Something Went Wrong!');
    }
}
