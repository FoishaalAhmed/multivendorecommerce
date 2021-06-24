<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstoreCategory extends Model
{
    protected $fillable = [
        'category', 'commission', 'information', 'facility', 'logo',
    ];

    public function storeEstoreCategory(Object $request)
    {
        $image = $request->file('logo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/estoreCategories/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->logo      = $image_url;
        }

        $this->category      = $request->category;
        $this->commission    = $request->commission;
        $this->information   = $request->information;
        $this->facility      = $request->facility;
        $storeEstoreCategory = $this->save();

        $storeEstoreCategory
            ? session()->flash('message', 'New Estore Category Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateEstoreCategory(Object $request, Int $id)
    {
        $category = $this::findOrFail($id);
        $image = $request->file('logo');

        if ($image) {
            
            if (file_exists($category->logo)) unlink($category->logo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/estoreCategories/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $category->logo  = $image_url;
        }

        $category->category    = $request->category;
        $category->commission  = $request->commission;
        $category->information = $request->information;
        $category->facility    = $request->facility;
        $updateEstoreCategory  = $category->save();

        $updateEstoreCategory
            ? session()->flash('message', 'Estore Category Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyEstoreCategory(Int $id)
    {
        $category = $this::findOrFail($id);
        if (file_exists($category->logo)) unlink($category->logo);
        $destroyEstoreCategory = $category->delete();

        $destroyEstoreCategory
            ? session()->flash('message', 'Estore Category Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
