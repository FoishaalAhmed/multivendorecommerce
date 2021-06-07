<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellerCategory extends Model
{
    protected $fillable = [
        'category', 'commission', 'information', 'facility', 'logo',
    ];

    public function storeSellerCategory(Object $request)
    {
        $image = $request->file('logo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/sellerCategories/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->logo      = $image_url;
        }

        $this->category      = $request->category ;
        $this->commission    = $request->commission ;
        $this->information   = $request->information ;
        $this->facility      = $request->facility ;
        $storeSellerCategory = $this->save();

        $storeSellerCategory
            ? session()->flash('message', 'New Seller Category Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateSellerCategory(Object $request, Int $id)
    {
        $category = $this::findOrFail($id);
        $image = $request->file('logo');

        if ($image) {
            if(file_exists($category->logo)) unlink($category->logo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/sellerCategories/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $category->logo  = $image_url;
        }

        $category->category    = $request->category ;
        $category->commission  = $request->commission ;
        $category->information = $request->information ;
        $category->facility    = $request->facility;
        $updateSellerCategory  = $category->save();

        $updateSellerCategory
            ? session()->flash('message', 'Seller Category Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroySellerCategory(Int $id)
    {
        $category = $this::findOrFail($id);
        if (file_exists($category->logo)) unlink($category->logo);
        $destroySellerCategory = $category->delete();

        $destroySellerCategory
            ? session()->flash('message', 'Seller Category Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
