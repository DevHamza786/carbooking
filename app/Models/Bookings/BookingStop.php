<?php

namespace App\Models\Bookings;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingStop extends Model
{
    use HasFactory , SoftDeletes;

    protected $guarded = ['id'];
}
