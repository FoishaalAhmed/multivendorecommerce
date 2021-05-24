<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public static $validateRule = [

        'name'      => 'required|string|max: 255',
    ];

    public function products()
    {
        return $this->belongsToMany('App\Model\Product');
    }

    public function storeCategory(Object $request)
    {
        $this->name      = $request->name;
        $storeCategory   = $this->save();

        $storeCategory ?
        Session::flash('message', 'Category Created Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }

    public function updateCategory(Object $request, Int $id)
    {
        $category = $this::findOrFail($id);
        $category->name      = $request->name;
        $updateCategory      = $category->save();

        $updateCategory ?
        Session::flash('message', 'Category Updated Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyCategory(Int $id)
    {
        $category = $this::findOrFail($id);
        $deleteCategory = $category->delete();

        $deleteCategory ?
        Session::flash('message', 'Category Deleted Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }
}
