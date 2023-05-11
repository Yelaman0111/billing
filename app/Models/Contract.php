<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'contracts';


    protected $fillable = [
        'title',
        'title_rbk',
        'name',
        'connector',
        'login',
        'password',
        'date1',
        'date2',
        'agr_date',
        'mode',
        'auction_sum',
        'auction_vat',
        'billable',
        'rbkip',
        'manager',
        'company_id',
    ];

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager');
    }
}
