<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Categories;


class item_controller extends Controller
{

    public function index()
    {
        $item=Item::all();
        $categories=Categories::all();

        return view('item.index')->with('item', $item)->with('categories', $categories);
    }




    public function show($id)
{

}
    
    public function create()
    {
        $categories = Categories::all(['id', 'name']);
        return view('item.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $input['name'] = $request->input('item-name'); 
        $input['categories_id'] = $request->input('categories_id');
        item::create($input);
        return redirect('crud/item/create');
    }


    public function edit($id) {
        $item = Item::find($id);
        $categories = Categories::all(['id', 'name']);
    
        return view('item.edit', compact('item', 'categories'));
    }
    
    public function update(Request $request, $id){
    
        $item = Item::find($id);
    
        $input['name'] = $request->input('item-name'); 
        $input['categories_id'] = $request->input('categories_id');
    
        $item->update($input);
        return redirect('crud/item');
    }


    public function destroy($id)
    {
        item::destroy($id);
        return redirect('crud/item');  
    }

}
    


