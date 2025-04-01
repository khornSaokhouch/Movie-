<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'movie_title',
        'location',
        'showtime',
        'seats',
        'payment_status',
    ];

    protected $casts = [
        'seats' => 'array', // Cast to array
    ];
}
