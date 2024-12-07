<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exhib2 extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'email',
        'selectDate',
        'selectTime',
        'category',
        'paymentMethod',
        'quantity',
        'totalPrice',
    ];
}
