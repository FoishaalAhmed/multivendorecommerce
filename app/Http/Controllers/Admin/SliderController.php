<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $sliderObject;

    public function __construct()
    {
        $this->sliderObject = new Slider();
    }

    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('backend.admin.slider', compact('sliders'));
    }

    public function store(SliderRequest $request)
    {
        $this->sliderObject->storeSlider($request);
        return back();
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        $sliders = Slider::latest()->get();
        return view('backend.admin.slider', compact('slider', 'sliders'));
    }

    public function update(Request $request, $id)
    {
        $this->sliderObject->updateSlider($request, $id);
        return redirect()->route('admin.sliders.index');
    }

    public function destroy($id)
    {
        $this->sliderObject->destroySlider($id);
        return back();
    }
}
