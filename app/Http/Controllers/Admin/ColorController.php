<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    private $colorObject;

    public function __construct()
    {
        $this->colorObject = new Color();
    }

    public function index()
    {
        $colors = Color::orderBy('name', 'asc')->get();
        return view('backend.admin.color', compact('colors'));
    }

    public function store(Request $request)
    {
        $request->validate(Color::$validateRule);
        $this->colorObject->storeColor($request);
        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate(Color::$validateRule);
        $this->colorObject->updateColor($request, $request->id);
        return back();
    }
    
    public function destroy($id)
    {
        $this->colorObject->destroyColor($id);
        return back();
    }
}
