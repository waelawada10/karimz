<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class categories_controller extends Controller
{

    public function index()
    {
        $categories=categories::all();
        return view('categories.index')->with('categories', $categories);
    }


    public function show($id)
{

}
    
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $input['name'] = $request->input('categories-name'); 
        categories::create($input);
        return redirect('crud/categories/create');
    }


    public function edit($id) {
        $categories = categories::find($id);
     
        return view('categories.edit')->with('categories', $categories);
    }
    
    public function update(Request $request, $id){
    
    $categories = categories::find($id);

    $input['name'] = $request->input('categories-name'); 
    $categories->update($input);
    return redirect('crud/categories');
    }


    public function destroy($id)
    {
        categories::destroy($id);
        return redirect('crud/categories');  
    }

}
    


