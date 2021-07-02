<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralRequest;
use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{

    private $generalObject;

    public function __construct()
    {
        $this->generalObject = new General();
    }

    public function index()
    {
        $generals = General::orderBy('name', 'asc')->get();
        return view('backend.admin.general', compact('generals'));
    }

    public function store(GeneralRequest $request)
    {
        $this->generalObject->storeGeneral($request);
        return back();
    }


    public function update(GeneralRequest $request, $id)
    {
        $this->generalObject->updateGeneral($request, $request->id);
        return redirect()->route('admin.generals.index');
    }

    public function destroy($id)
    {
        $this->generalObject->destroyGeneral($id);
        return back();
    }
}
