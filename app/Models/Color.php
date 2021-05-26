<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Color extends Model
{
    protected $fillable = [
        'name',
    ];

    public static $validateRule = [
        'name' => 'required|string|max:255',
    ];

    public function storeColor(Object $request)
    {
        $this->name = $request->name;
        $storeColor = $this->save();

        $storeColor ? 
        Session::flash('message', 'Color Save Successfully!') :
        Session::flash('message', 'Something Went Wrong!') ;
    }

    public function updateColor(Object $request, Int $id)
    {
        $color = $this::findOrFail($id);
        $color->name = $request->name;
        $updateColor = $color->save();

        $updateColor ?
            Session::flash('message', 'Color Update Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyColor(Int $id)
    {
        $color = $this::findOrFail($id);
        $deleteColor = $color->delete();

        $deleteColor ?
            Session::flash('message', 'Color Delete Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
