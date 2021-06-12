<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $pageObject;

    public function __construct()
    {
        $this->pageObject = new Page();
    }
    
    public function index()
    {
        $pages = Page::orderBy('created_at', 'desc')->get();
        return view('backend.admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('backend.admin.pages.create');
    }

    public function store(PageRequest $request)
    {
        $this->pageObject->storePage($request);
        return back();
    }

    public function edit($id)
    {
        $page = Page::FindOrFail($id);
        return view('backend.admin.pages.edit', compact('page'));
    }

    public function update(PageRequest $request, $id)
    {
        $this->pageObject->updatePage($request, $id);
        return redirect()->route('admin.pages.index');
    }
    
    public function destroy($id)
    {
        $this->pageObject->destroyPage($id);
        return back();
    }
}
