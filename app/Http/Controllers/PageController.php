<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $trains = Train::all();
        return view("pages.home", compact("trains"));
    }
}
