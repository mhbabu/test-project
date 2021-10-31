<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentLog extends Model
{

    protected $table = 'payment_history';
    protected $fillable = [
        'id',
        'user_id',
        'package_id',
        'points',
        'request_price',
        'currency',
        'platform',
        'transaction_id',
        'status',
        'gateway_page_url',
        'failed_reason',
        'session_key',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
