<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Room;
use App\Models\Payment;
class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'room_id',
        'adults',
        'kids',
        'check_in',
        'check_out',
        'booking_date',
       'additionalNeed',
       'totalAmount',
       'additionalAmount',
       'payableAmount',
       'stutas',

    ];

   
    protected $casts=[
        'additionalNeed' => 'array',
       
    ];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function room(){
        return $this->belongsTo(Room::class);
    }
     public function payment(){
        return $this->belongsTo(Payment::class);
    }


}
