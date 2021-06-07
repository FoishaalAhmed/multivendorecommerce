<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name', 'logo',
    ];

    public function storeBrand(Object $request)
    {
        $image = $request->file('logo');

        $image_name      = date('YmdHis');
        $ext             = strtolower($image->getClientOriginalName());
        $image_full_name = $image_name . '' . $ext;
        $upload_path     = 'public/images/brands/';
        $image_url       = $upload_path . $image_full_name;
        $success         = $image->move($upload_path, $image_full_name);
        $this->logo      = $image_url;
        $this->name      = $request->name;
        $storeBrand      = $this->save();

        $storeBrand ?
            session()->flash('message', 'Brand Created Successfully!') :
            session()->flash('message', 'Something Went Wrong!');
    }
    public function updateBrand(Object $request, Int $id)
    {
        $brand = $this::findOrFail($id);
        $image = $request->file('logo');

        if ($image) {

            if (file_exists($brand->logo)) unlink($brand->logo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalName());
            $image_full_name = $image_name . '' . $ext;
            $upload_path     = 'public/images/brands/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $brand->logo     = $image_url;
        }

        $brand->name     = $request->name;
        $updateBrand     = $brand->save();

        $updateBrand ?
            session()->flash('message', 'Brand Updated Successfully!') :
            session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyBrand(Int $id)
    {
        $brand = $this::findOrFail($id);
        if (file_exists($brand->logo)) unlink($brand->logo);
        $destroyBrand = $brand->delete();

        $destroyBrand ?
            session()->flash('message', 'Brand Deleted Successfully!') :
            session()->flash('message', 'Something Went Wrong!');
    }
}
