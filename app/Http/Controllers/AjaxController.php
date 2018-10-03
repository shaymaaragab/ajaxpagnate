<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function ajaxPagination(Request $request)
    {
        $data = Item::paginate(5);

        if ($request->ajax()) {
            return view('presult', compact('data'));
        }

        return view('ajaxPagination',compact('data'));
    }
}
