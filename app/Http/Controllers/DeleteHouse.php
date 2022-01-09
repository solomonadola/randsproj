<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class DeleteHouse extends Controller
{
    public function index($id)
    {
        House::find($id)->delete();
        return Redirect()->back()->with('success', 'house  deleted successfully');
    }
    public function pdelete($id)
    {
        House::onlyTrashed()->find($id)->forceDelete();
        return Redirect()->back()->with('success', 'house  deleted successfully');

    }
    public function restoreDelete($id)
    {
        House::onlyTrashed()->find($id)->restore();
        return Redirect()->back()->with('success', 'house  deleted successfully');

    }
}
