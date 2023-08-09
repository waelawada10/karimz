<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{

    protected $table = 'item';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'categories_id'];

    public function userChoices()
{
    return $this->hasMany(UserChoice::class);
}

public function variance()
{
    return $this->hasMany(variance::class);
}
public function Variant_Item()
{
    return $this->hasMany(Variant_Item::class);
}

public function categories()
{
    return $this->belongsTo(Categories::class);
}

}
