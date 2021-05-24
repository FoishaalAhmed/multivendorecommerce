<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Query extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'subject', 'message',
    ];

    public function storeQuery(Object $request)
    {
        $this->name    = $request->name;
        $this->email   = $request->email;
        $this->phone   = $request->phone;
        $this->subject = $request->subject;
        $this->message = $request->message;
        $this->save();
    }

    public function destroyQuery(Int $id)
    {
        $query = Query::findOrFail($id);
        $destroy_query = $query->delete();

        $destroy_query 
        ? Session::flash('message', 'Query Deleted Successfully!') 
        : Session::flash('message', 'Something Went Wrong!') ;
    }
}
