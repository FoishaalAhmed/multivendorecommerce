<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    private $serviceObject;

    public function __construct()
    {
        $this->serviceObject = new Service();
    }

    public function index()
    {
        $services = Service::latest()->get();
        return view('backend.admin.service.index', compact('services'));
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.admin.service.show', compact('service'));
    }
    
    public function destroy($id)
    {
        $this->serviceObject->destroyService($id);
        return back();
    }
}
