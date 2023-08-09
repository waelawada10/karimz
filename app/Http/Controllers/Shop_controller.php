<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserChoice;


class Shop_controller extends Controller
{

    public function home(){

        $query = UserChoice::with(['categories', 'item', 'variance', 'Variant_Item'])->get();
        return view('home')->with('queryz', $query);
        
        
        }

    public function index(Request $request)
    {
        $query = UserChoice::with(['categories', 'item', 'variance', 'Variant_Item'])->get();
        return view('index')->with('queryz', $query);

    }


}
