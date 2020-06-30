<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockedController extends Controller
{
    public function index()
    {
        return view('blocked');
    }
}
