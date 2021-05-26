<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Size extends Model
{
    protected $fillable = [
        'name',
    ];

    public static $validateRule = [
        'name' => 'required|string|max:255',
    ];

    public function storeSize(Object $request)
    {
        $this->name = $request->name;
        $storeSize = $this->save();

        $storeSize ?
            Session::flash('message', 'Size Save Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function updateSize(Object $request, Int $id)
    {
        $size = $this::findOrFail($id);
        $size->name = $request->name;
        $updateSize = $size->save();

        $updateSize ?
            Session::flash('message', 'Size Update Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroySize(Int $id)
    {
        $size = $this::findOrFail($id);
        $deleteSize = $size->delete();

        $deleteSize ?
            Session::flash('message', 'Size Delete Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
