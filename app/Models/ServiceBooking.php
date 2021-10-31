<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBooking extends Model
{
    use HasFactory;

    protected $table = 'booking_informations';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'country',
        'country_code',
        'latitude',
        'longitude',
        'city',
        'area',
        'postcode',
        'address',
        'notes',
        'three_bedroom',
        'two_bedroom',
        'total_amount',
        'created_at',
        'updated_at'
    ];
}
