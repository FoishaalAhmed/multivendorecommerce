<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = [
        'name', 'value',
    ];

    public function storeGeneral(Object $request)
    {
        $this->name   = $request->name;
        $this->value  = $request->value;
        $storeGeneral = $this->save();

        $storeGeneral
            ? session()->flash('message', 'General Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateGeneral(Object $request, Int $id)
    {
        $general        = $this::findOrFail($id);
        $general->name  = $request->name;
        $general->value = $request->value;
        $updateGeneral  = $general->save();

        $updateGeneral
            ? session()->flash('message', 'General Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyGeneral(Int $id)
    {
        $general = $this::findOrFail($id);
        $destroyGeneral = $general->delete();

        $destroyGeneral
            ? session()->flash('message', 'General Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
