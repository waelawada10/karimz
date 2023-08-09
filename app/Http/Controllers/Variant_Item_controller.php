<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variant_Item;
use App\Models\variance;



class Variant_Item_controller extends Controller
{

    public function index()
    {
        $query=Variant_Item::all();
        $variance=variance::all();

        return view('Variant_Item.index')->with('queryz', $query)->with('variance', $variance);
    }


    public function show($id)
{

}
    
    public function create()
    {
        

     
        $variance = variance::all(['id', 'name']);

        return view('Variant_Item.create')
        ->with('variance', $variance);
    }

    public function store(Request $request)
    {
        $input['name'] = $request->input('Variant_Item-name'); 
        $input['variance_id'] = $request->input('variance_id');
        
        $variance = variance::find($input['variance_id']);
        

    
        Variant_Item::create($input);
        return redirect('crud/Variant_Item/create');
    }


    public function edit($id) {
        $query = Variant_Item::find($id);
        $variance = variance::all(['id', 'name']);


     
        return view('Variant_Item.edit')->with('queryz', $query)->with('variance', $variance);
    }
    
    public function update(Request $request, $id){
    
    $queryz = Variant_Item::find($id);

    $input['name'] = $request->input('Variant_Item-name'); 
    $input['variance_id'] = $request->input('variance_id');

    $variance = variance::find($input['variance_id']);
        


    $queryz->update($input);
    return redirect('crud/Variant_Item');
    }


    public function destroy($id)
    {
        Variant_Item::destroy($id);
        return redirect('crud/Variant_Item');  
    }

}
    


