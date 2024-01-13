<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    protected function setNameAttribute($value)
    {
        $this->attributes['name'] = trim(Ucwords(strtolower($value)));
    }
}
