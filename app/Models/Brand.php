<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

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
        Session::flash('message', 'Brand Created Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
        
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
        Session::flash('message', 'Brand Updated Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
        
    }

    public function destroyBrand(Int $id)
    {
        $brand = $this::findOrFail($id);
        if (file_exists($brand->logo)) unlink($brand->logo);
        $destroyBrand = $brand->delete();

        $destroyBrand ?
        Session::flash('message', 'Brand Deleted Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
        
    }
}
