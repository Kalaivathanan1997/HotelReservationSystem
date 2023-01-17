<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'cadholder_name',
        'card_number' ,
        'expire_month',
        'expire_Year' ,
        'cv_code',

    ];
    
  



}
