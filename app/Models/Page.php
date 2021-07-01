<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Page extends Model
{
    protected $fillable = [
        'name', 'slug', 'text', 'photo',
    ];

    public function storePage(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/pages/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->name = $request->name;
        $this->slug = $request->slug;
        $this->text = $request->text;
        $storePage  = $this->save();

        $storePage 
        ? Session::flash('message', 'New Page Created Successfully!') 
        : Session::flash('message', 'Something Went Wrong!');
    }

    public function updatePage(Object $request, Int $id)
    {
        $page  = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {

            if(file_exists($page->photo)) unlink($page->photo);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/pages/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $page->photo     = $image_url;
        }

        $page->name = $request->name;
        $page->slug = $request->slug;
        $page->text = $request->text;
        $updatePage  = $page->save();

        $updatePage 
        ? Session::flash('message', 'Page Updated Successfully!') 
        : Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyPage(Int $id)
    {
        $page  = $this::findOrFail($id);
        if (file_exists($page->photo)) unlink($page->photo);
        $deletePage = $page->delete();
        
        $deletePage 
        ? Session::flash('message', 'Page Deleted Successfully!') 
        : Session::flash('message', 'Something Went Wrong!');
    }


}
