<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Gallery extends Model
{
    protected $fillable = [
        'photo', 'type', 'video', 'title', 'description',
    ];

    public function storeGallery($request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/galleries/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->type  = $request->type;
        $this->video = $request->video;
        $this->title = $request->title;
        $this->description = $request->description;

        $storeGallery = $this->save();

        $storeGallery 
        ? Session::flash('message', 'New Gallery Created Successfully!') 
        : Session::flash('message', 'Gallery Create Failed!');
    }

    public function updateGallery($request, $id)
    {
        $gallery = $this::findOrFail($id);

        $image = $request->file('photo');

        $gallery->type  = $request->type;

        if ($request->type == 'Photo') {

            if ($image) {

                if (file_exists($gallery->photo)) unlink($gallery->photo);

                $image_name      = date('YmdHis');
                $ext             = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path     = 'public/images/galleries/';
                $image_url       = $upload_path . $image_full_name;
                $success         = $image->move($upload_path, $image_full_name);
                $gallery->photo   = $image_url;
            }

            $gallery->video = Null;

            $gallery->title = Null;
            $gallery->description = Null;

        } else {

            if (file_exists($gallery->photo)) unlink($gallery->photo);
            $gallery->video = $request->video;
            $gallery->title = $request->title;
            $gallery->description = $request->description;
            $gallery->photo = Null;
        }

        

        $updateGallery    = $gallery->save();

        $updateGallery 
        ? Session::flash('message', 'Gallery Updated Successfully!') 
        : Session::flash('message', 'Gallery Update Failed!');
    }

    public function destroyGallery($id)
    {
        $gallery = $this::findOrFail($id);

        if (file_exists($gallery->photo)) unlink($gallery->photo);

        $deleteGallery    = $this::where('id', $id)->delete();

        $deleteGallery 
        ? Session::flash('message', 'Gallery Deleted Successfully!') 
        : Session::flash('message', 'Gallery Delete Failed!');
    }
}
