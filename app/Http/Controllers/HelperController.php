<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function subCategory(Request $request)
    {
        $category_id = $request->category_id;
        $subCategories = SubCategory::where('category_id', $category_id)->select('id', 'name')->get();
        echo json_encode($subCategories);
    }

    public function childCategory(Request $request)
    {
        $sub_category_id = $request->sub_category_id;
        $subCategories = ChildCategory::where('sub_category_id', $sub_category_id)->select('id', 'name')->get();
        echo json_encode($subCategories);
    }
}
