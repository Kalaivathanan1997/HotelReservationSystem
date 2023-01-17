<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'roomNo',
        'roomType',
        'floorNo',
        'adult_price',
        'kid_price',
        'amenities',
        'roomView',
    ];
    protected $guarded=[];
    protected $casts=[
        'amenities' => 'array',
    ];

    public function booking(){
        return $this->belongsTo(Booking::class);
    }

}
