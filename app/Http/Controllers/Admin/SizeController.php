<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    private $sizeObject;

    public function __construct()
    {
        $this->sizeObject = new Size();
    }

    public function index()
    {
        $sizes = Size::orderBy('name', 'asc')->get();
        return view('backend.admin.size', compact('sizes'));
    }

    public function store(Request $request)
    {
        $request->validate(Size::$validateRule);
        $this->sizeObject->storeSize($request);
        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate(Size::$validateRule);
        $this->sizeObject->updateSize($request, $request->id);
        return back();
    }

    public function destroy($id)
    {
        $this->sizeObject->destroySize($id);
        return back();
    }
}
