<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTentangkamiController extends Controller
{
    public function index()
    {
        return view('portal.tentangkami');
    }
}
