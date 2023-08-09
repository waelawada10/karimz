<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Template extends Controller
{

    public function template()
    {
        return view('template');
    }
}
