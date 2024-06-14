<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use App\Http\Requests\Booking\CreateBooking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        return view('pages.booking.index');
    }

    public function store(CreateBooking $request){
        return $request->CreateBooking();
    }
}
