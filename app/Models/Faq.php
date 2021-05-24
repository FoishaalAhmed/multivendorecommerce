<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Faq extends Model
{
    protected $fillable = [
        'question', 'answer',
    ];

    public static $validateRule = [
        'question' => 'required|string|max:255',
        'answer' => 'required|string',
    ];

    public function storeFaq(Object $request)
    {
        $this->question = $request->question;
        $this->answer  = $request->answer;
        $storeFaq    = $this->save();

        $storeFaq ?
            Session::flash('message', 'Faq Created Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function updateFaq(Object $request, Int $id)
    {
        $faq        = $this::findOrFail($id);
        $faq->question = $request->question;
        $faq->answer  = $request->answer;
        $updateFaq  = $faq->save();

        $updateFaq ?
            Session::flash('message', 'Faq Updated Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyFaq(Int $id)
    {
        $faq       = $this::findOrFail($id);
        $deleteFaq = $faq->delete();

        $deleteFaq ?
            Session::flash('message', 'Faq Deleted Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
