<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\variance;
use App\Models\Item;




class variance_controller extends Controller
{

    public function index()
    {
        $variance=variance::all();
        $item=Item::all();

        return view('variance.index')->with('variance', $variance)->with('item', $item);
    }


    public function show($id)
{

}
    

    public function create()
    {
        $item = Item::all(['id', 'name']);
        return view('variance.create', compact('item'));
    }
    



    public function store(Request $request)
    {
        $input['name'] = $request->input('variance-name');
        $input['item_id'] = $request->input('item_id');


        variance::create($input);
        return redirect('crud/variance/create');
    }




    public function edit($id) {
        $variance = variance::find($id);
        $item = item::all(['id', 'name']);
    
        return view('variance.edit', compact('variance', 'item'));
    }
    

    public function update(Request $request, $id){
    
        $variance = variance::find($id);
    
        $input['name'] = $request->input('variance-name'); 
        $input['item_id'] = $request->input('item_id');
    
        $variance->update($input);
        return redirect('crud/variance');
    }




    public function destroy($id)
    {
        variance::destroy($id);
        return redirect('crud/variance');  
    }

}
    


