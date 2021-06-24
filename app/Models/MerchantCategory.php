<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantCategory extends Model
{
    protected $fillable = [
        'category', 'commission', 'information', 'facility', 'logo',
    ];

    public function storeMerchantCategory(Object $request)
    {
        $image = $request->file('logo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/merchantCategories/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->logo      = $image_url;
        }

        $this->category      = $request->category;
        $this->commission    = $request->commission;
        $this->information   = $request->information;
        $this->facility      = $request->facility;
        $storeMerchantCategory = $this->save();

        $storeMerchantCategory
            ? session()->flash('message', 'New Merchant Category Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateMerchantCategory(Object $request, Int $id)
    {
        $category = $this::findOrFail($id);
        $image = $request->file('logo');

        if ($image) {
            if (file_exists($category->logo)) unlink($category->logo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/merchantCategories/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $category->logo  = $image_url;
        }

        $category->category    = $request->category;
        $category->commission  = $request->commission;
        $category->information = $request->information;
        $category->facility    = $request->facility;
        $updateMerchantCategory  = $category->save();

        $updateMerchantCategory
            ? session()->flash('message', 'Merchant Category Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyMerchantCategory(Int $id)
    {
        $category = $this::findOrFail($id);
        if (file_exists($category->logo)) unlink($category->logo);
        $destroyMerchantCategory = $category->delete();

        $destroyMerchantCategory
            ? session()->flash('message', 'Merchant Category Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
