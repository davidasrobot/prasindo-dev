<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mail\OrderConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
        return view('Booking.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookings = Booking::where('uuid', $id)->firstOrFail();
        return view('Booking.invoice', compact([
            'bookings'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function confirm($uuid)
    {
        $booking = Booking::where('uuid', $uuid)->first();
        if($booking->email_verified_at !== NULL){
            return view('Booking.confirmed')->with(['confirmed' => true]);
        }
        $booking->update([
            'email_verified_at' => now(),
        ]);
        Mail::to($booking->email)->send(new OrderConfirmation($booking->uuid));
        return view('Booking.confirmed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
