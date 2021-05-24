<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::firstOrFail();
        return view('backend.admin.contact', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contactObject = new Contact();
        $request->validate(Contact::$validateRule);
        $contactObject->updateContact($request, $id);
        return back();
    }
}
