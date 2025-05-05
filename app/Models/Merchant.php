<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $table = 'merchants';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'pt',
        'city',
        'latitude',
        'longitude',
        'ppiu',
        'pihk',
        'rate',
        'contact',
        'isMerchant'
    ];
}
