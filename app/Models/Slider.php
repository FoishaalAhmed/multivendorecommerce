<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'link', 'photo',
    ];

    public function storeSlider(Object $request)
    {
        $image = $request->file('photo');
        $image_name      = date('YmdHis');
        $ext             = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path     = 'public/images/sliders/';
        $image_url       = $upload_path . $image_full_name;
        $success         = $image->move($upload_path, $image_full_name);
        $this->photo     = $image_url;
        $this->link      = $request->link;
        $storeSlider     = $this->save();

        $storeSlider
            ? session()->flash('message', 'Slider Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateSlider(Object $request, Int $id)
    {
        $slider = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {
            if (file_exists($slider->photo)) unlink($slider->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/sliders/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $slider->photo   = $image_url;
        }

        $slider->link = $request->link;
        $updateSlider = $slider->save();

        $updateSlider
            ? session()->flash('message', 'Slider Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroySlider(Int $id)
    {
        $slider = $this::findOrFail($id);
        if (file_exists($slider->photo)) unlink($slider->photo);
        $destroySlider = $slider->delete();

        $destroySlider
            ? session()->flash('message', 'Slider Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
