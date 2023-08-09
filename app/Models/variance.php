<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class variance extends Model
{
    protected $table = 'variance';
    protected $primaryKey = 'id';
    protected $fillable = ['name']; 

    


    public function Variant_Item()
{
    return $this->hasMany(Variant_Item::class);
}

public function userChoices()
{
    return $this->hasMany(UserChoice::class);
}
}


