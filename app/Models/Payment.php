<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'paymentType',
        'amount',
       

    ];

    public function booking(){
        return $this->belongsTo(booking::class);
    }
}
