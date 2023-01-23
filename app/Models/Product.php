<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function store()
    {
        return $this->belongsTo('App\Models\Store');
    }

    public function transaction()
    {
        return $this->hasMany('App\Models\Transaction');
    }
}