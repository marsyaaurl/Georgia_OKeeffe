<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store1 extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'email',
        'phoneNumber',
        'address',
        'quantity',
        'totalPrice',
        'paymentMethod',
    ];
}
