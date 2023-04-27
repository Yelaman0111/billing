<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyAddress extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'region',
        'locality',
        'city',
        'street',
        'house',
        'housing',
        'office',
        'postcode',
        'comment',
        'delivery_address',
        'delivery_city',
    ];
}
