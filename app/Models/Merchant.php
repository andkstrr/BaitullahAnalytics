<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'city',
        'latitude',
        'longitude',
        'ppiu',
        'pihk',
        'rate',
        'contact',
        'isMerchant'
    ];

    public function cityRelation() {
        return $this->belongsTo(City::class);
    }

}
