<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\item;
use App\Models\variance;
use App\Models\Variant_Item;

use App\Models\UserChoice;

class userchoice_controller extends Controller
{

    public function index()
    {
        $query=UserChoice::all();
        return view('userchoice.index')->with('queryz', $query);
    }


    public function show($id)
{

}
    
public function create()
{
    $categories = categories::all(['id', 'name']);
    $item = item::all(['id', 'name','categories_id']);
    $variance = variance::all(['id','name']);
    $Variant_Item = Variant_Item::all(['id','name','variance_id']);

    return view('userchoice.create')
        ->with('categories', $categories)
        ->with('item', $item)
        ->with('variance', $variance)
        ->with('Variant_Item', $Variant_Item);
}




    public function store(Request $request)
    {
        $input['categories_id'] = $request->input('categories_id');
        $input['item_id'] = $request->input('item_id');
        $input['variance_id'] = $request->input('variance_id');
        $input['Variant_Item_id'] = $request->input('Variant_Item_id');
        
        UserChoice::create($input);
        
        return redirect('crud/userchoice/create');
    }




    public function edit($id) {
        $userchoice = UserChoice::find($id);
        $categories = categories::all(['id', 'name']);
        $item = item::all(['id', 'name','categories_id']);
        $variance = variance::all(['id', 'name']);
        $Variant_Item = Variant_Item::all(['id', 'name','variance_id']);
            
        return view('userchoice.edit', compact('userchoice', 'categories', 'item', 'variance', 'Variant_Item'));
    }
        
    
    public function update(Request $request, $id){
    
        $userchoice = UserChoice::find($id);
        $input['categories_id'] = $request->input('categories_id');  
        $input['item_id'] = $request->input('item_id');
        $input['variance_id'] = $request->input('variance_id');
        $input['Variant_Item_id'] = $request->input('Variant_Item_id');

        $userchoice->update($input);
        return redirect('crud/userchoice');
        }


    public function destroy($id)
    {
        UserChoice::destroy($id);
        return redirect('crud/userchoice');  
    }

}
    


