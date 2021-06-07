<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    private $faqObject;
    public function __construct()
    {
        $this->faqObject = new Faq();
    }

    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('backend.admin.faq', compact('faqs'));
    }

    public function store(Request $request)
    {
        $request->validate(Faq::$validateRule);
        $this->faqObject->storeFaq($request);
        return back();
    }

    public function edit($id)
    {
        $faq  = Faq::findOrFail($id);
        $faqs = Faq::latest()->get();
        return view('backend.admin.faq', compact('faqs', 'faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(Faq::$validateRule);
        $this->faqObject->updateFaq($request, $id);
        return redirect()->route('admin.faqs.index');
    }

    public function destroy($id)
    {
        $this->faqObject->destroyFaq($id);
        return back();
    }
}
