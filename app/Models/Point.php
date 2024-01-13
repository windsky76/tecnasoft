<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Point extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function priceLists(): HasMany{
        return $this->hasMany(PriceList::class,'point_id','id');
    }

    protected function setNameAttribute($value)
    {
        $this->attributes['name'] = trim(Ucwords(strtolower($value)));
    }

}
