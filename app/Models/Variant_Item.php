<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant_Item extends Model
{

    protected $table = 'Variant_Item';
    protected $primaryKey = 'id';
    protected $fillable = ['name','variance_id'];


    public function variance()
    {
        return $this->belongsTo(variance::class,'variance_id');
    }
    

    public function userChoices()
{
    return $this->hasMany(UserChoice::class);
}

}
