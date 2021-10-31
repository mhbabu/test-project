<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesInvoice extends Model
{
    protected $table = 'sales_invoices';
    protected $fillable = [
        'id',
        'user_id',
        'payment_history_id',
        'transaction_price',
        'provider_id',
        'provider_name',
        'store_id',
        'agent_code',
        'external_trx_id',
        'internal_trx_id',
        'bank_tran_id',
        'card_type',
        'card_no',
        'card_issuer',
        'card_brand',
        'verify_sign',
        'verify_key',
        'is_success',
        'purchase_date',
        'created_at',
        'updated_at'
    ];
}
