<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanderoController extends Controller
{
    public function index(Request $request)
    {
        return view('layouts.master-layout');
    }
}
