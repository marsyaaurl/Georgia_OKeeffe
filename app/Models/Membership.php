<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'starts_at', 'expires_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getIsActiveAttribute()
    {
        return now()->lte($this->expires_at);
    }
}