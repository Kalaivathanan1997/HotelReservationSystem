<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'c_name',
        'address',
        'phone',
        'birth',
        'gender',
        'national',
        'nic',
        'stutas',
        'email',
        'pass',
      
    ];
}
 