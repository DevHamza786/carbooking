<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Bookings\Booking;
use App\Models\Bookings\BookingStop;
use App\Helper\Reply;
use Exception;
use Illuminate\Support\Facades\DB;

class CreateBooking extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true; // Change to true to allow the request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'service_type' => ['required', 'string', 'in:Airport_pickup,To_airport,Charter,Point_to_point,wedding'],
            'pickup_date' => ['required', 'date'],
            'pickup_time' => ['required', 'date_format:H:i'],
            'pickup_location' => ['required', 'string'],
            'pickup_latitude' => ['required', 'numeric'],
            'pickup_longitude' => ['required', 'numeric'],
            'dropoff_location' => ['required', 'string'],
            'dropoff_latitude' => ['required', 'numeric'],
            'dropoff_longitude' => ['required', 'numeric'],
            'no_passengers' => ['required', 'integer', 'min:1', 'max:100'],
            'luggage_count' => ['required', 'integer', 'min:0', 'max:100'],
        ];
    }

    /**
     * Create a new booking.
     *
     * @return \App\Helper\Reply
     */
    public function createBooking()
    {
        DB::beginTransaction();

        try {
            $booking = Booking::create([
                'service_type' => $this->input('service_type'),
                'pickup_date' => $this->input('pickup_date'),
                'pickup_time' => $this->input('pickup_time'),
                'pickup_location' => $this->input('pickup_location'),
                'pickup_latitude' => $this->input('pickup_latitude'),
                'pickup_longitude' => $this->input('pickup_longitude'),
                'dropoff_location' => $this->input('dropoff_location'),
                'dropoff_latitude' => $this->input('dropoff_latitude'),
                'dropoff_longitude' => $this->input('dropoff_longitude'),
                'no_passengers' => $this->input('no_passengers'),
                'luggage_count' => $this->input('luggage_count'),
                'child_seat_type' => $this->input('child_seat_type'),
                'no_child_seat' => $this->input('no_child_seat'),
            ]);

            // Committing to create booking stops
            DB::commit();

            return Reply::success(__('Booking Created Succesfully!.'));
        } catch (Exception $e) {
            DB::rollback();
            return Reply::error(__($e->getMessage()));
        }
    }
}
