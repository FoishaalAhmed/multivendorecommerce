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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::orderBy('name', 'asc')->get();
        return view('backend.admin.color', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Color::$validateRule);
        $this->colorObject->storeColor($request);
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Color::$validateRule);
        $this->colorObject->updateColor($request, $request->id);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->colorObject->destroyColor($id);
        return back();
    }
}
