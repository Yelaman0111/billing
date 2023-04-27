<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'companies';
    
    protected $fillable = [
        'name',
        'billing_name',
        'rnn',
        'ident_number',
        'udl_id',
        'ip_id',
        'nds_id',
        'address_id',
        'vip',
        'type',
        'udl_number',
        'udl_issued',
        'udl_date',
        'ip_number',
        'ip_serial',
        'ip_date',
        'nds_number',
        'nds_serial',
        'nds_date',
    ];

    public function address()
    {
        return $this->belongsTo(CompanyAddress::class, 'address_id');
    }
}