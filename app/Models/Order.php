<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'amount',
        'address',
        'transaction_id',
        'currency',
        'created_at',
        'updated_at'
    ];
}
