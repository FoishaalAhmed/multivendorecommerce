<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Query;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    private $query_object;

    public function __construct()
    {
        $this->query_object = new Query();
    }

    public function index()
    {
        $queries = Query::orderBy('created_at', 'desc')->get();
        return view('backend.admin.query.index', compact('queries'));
    }

    public function show(Int $id)
    {
        $query = Query::findOrFail($id);
        return view('backend.admin.query.show', compact('query'));
    }

    public function destroy(Int $id)
    {
        $this->query_object->destroy_query($id);
        return redirect()->back();
    }
}
