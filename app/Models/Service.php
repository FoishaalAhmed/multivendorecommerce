<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'phone', 'address', 'product', 'detail', 'photo',
    ];

    public static $validateRule = [
        'name'    => ['required', 'string', 'max: 255'],
        'phone'   => ['required', 'string', 'max: 15'],
        'address' => ['required', 'string'],
        'product' => ['required', 'string', 'max: 255'],
        'detail'  => ['required', 'string'],
        'photo'   => ['nullable', 'max: 1000', 'mimes: jpeg,jpg,png,gif,webp'],
    ];

    public function storeService(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/services/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->name    = $request->name;
        $this->phone   = $request->phone;
        $this->address = $request->address;
        $this->product = $request->product;
        $this->detail  = $request->detail;
        $storeService  = $this->save();

        $storeService
            ? session()->flash('message', 'New Service Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyService(Int $id)
    {
        $service = $this::findOrFail($id);
        if (file_exists($service->photo)) unlink($service->photo) ;
        $destroyService = $service->delete();

        $destroyService
            ? session()->flash('message', 'Service Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
