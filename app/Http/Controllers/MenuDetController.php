<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuDetController extends Controller
{
    public function index()
    {
        return view('content.menu_det');
    }
}
