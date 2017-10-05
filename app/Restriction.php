<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restriction extends Model
{
    use SoftDeletes;

    protected $fillable = ['wallet_id', 'uuid', 'created_by',
                           'updated_by', 'can_transfer_from_wallet',
                           'can_fund_wallet', 'can_add_beneficiary',
                           'can_transfer_to_wallet','can_transfer_to_beneficiary'
                           ];

    protected $casts = [
        'can_transfer_to_wallet' => 'json'
    ];
}
