<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function userChoices()
    {
        return $this->hasMany(UserChoice::class);
    }
    public function categories()
    {
        return $this->hasMany(Item::class);
    }
}
