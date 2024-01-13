<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PriceList extends Model
{
    use HasFactory;

    protected $fillable = [
        'point_id',
        'service_id',
        'price'
    ];

    public function service(): HasOne
    {
        return $this->hasOne(Service::class,'id','service_id');
    }

}
