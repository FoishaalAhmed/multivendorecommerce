<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public static $validateRule = [

        'name'      => 'required|string|max: 255',
    ];

    public function storeCategory(Object $request)
    {
        $this->name      = $request->name;
        $storeCategory   = $this->save();

        $storeCategory ?
           session()->flash('message', 'Category Created Successfully!') :
           session()->flash('message', 'Something Went Wrong!');
    }

    public function updateCategory(Object $request, Int $id)
    {
        $category = $this::findOrFail($id);
        $category->name      = $request->name;
        $updateCategory      = $category->save();

        $updateCategory ?
           session()->flash('message', 'Category Updated Successfully!') :
           session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyCategory(Int $id)
    {
        $category = $this::findOrFail($id);
        $deleteCategory = $category->delete();

        $deleteCategory ?
           session()->flash('message', 'Category Deleted Successfully!') :
           session()->flash('message', 'Something Went Wrong!');
    }
}
