<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChoice extends Model
{

    protected $table = 'user_choices';
    protected $primaryKey = 'id';
    protected $fillable = ['categories_id','item_id','variance_id','Variant_Item_id'];

    public function categories()
{
    return $this->belongsTo(categories::class,'categories_id');
}

public function item()
{
    return $this->belongsTo(item::class,'item_id');
}

public function variance()
{
    return $this->belongsTo(variance::class,'variance_id');
}

public function Variant_Item()
{
    return $this->belongsTo(Variant_Item::class,'Variant_Item_id');
}

}
