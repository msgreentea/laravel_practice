<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class ConsumerController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register(Request $request)
    {
        $items = Data::all();
        return view('thanks');
    }
    // public function show(Request $request)
    // {
    // }
}
