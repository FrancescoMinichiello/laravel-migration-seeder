<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $now = now();
        $trains = Train::where('data_di_partenza', '>=', $now)->get();
        return view('pages.trains', compact('trains'));
    }
}
