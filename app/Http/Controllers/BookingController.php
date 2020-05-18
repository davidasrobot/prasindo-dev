<?php

namespace App\Http\Controllers;

use App\Booking;
use App\BookingGolf;
use App\CarRent;
use App\GolfPackage;
use App\Mail\EmailConfirmation;
use App\Mail\OrderConfirmation;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_golf()
    {
        $golves = GolfPackage::all();
        return view('Form.Booking.golf', compact('golves'));
    }
    public function index_car()
    {
        $cars = CarRent::all();
        return view('Form.Booking.car', compact('cars'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeGolf(Request $request)
    {
        $booking = new Booking();
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'pax' => 'required|max:4',
            'start_date' => 'required',
            'end_date' => 'required',
            'golf_package_id' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }

        $dueDate = now()->add(15, 'days');
        $package = GolfPackage::findOrFail($request->golf_package_id);
        $total = $package->price * $request->pax;
        $dp = $total * 0.2;
        $createBooking = $booking->create([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $request->email,
            'total' => $total,
            'dp' => $dp,
            'due_date' => $dueDate
        ]);

        $sdate = new DateTime($request->start_date);
        $edate = new DateTime($request->end_date);
        $interval = $sdate->diff($edate);
        $days = $interval->format('%a');

        $createBooking->golf()->create([
            'pax' => $request->pax,
            'golf_package_id' => $request->golf_package_id,
            'notes' => $request->notes,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'days' => $days
        ]);
        Mail::to('tester@test.com')->send(new EmailConfirmation($createBooking->id));
        return redirect('/booking/success');
    }

    public function storeCar(Request $request)
    {
        $booking = new Booking();
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'car_rent_id' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }
        $package = CarRent::findOrFail($request->car_rent_id);
        $sdate = new DateTime($request->start_date);
        $edate = new DateTime($request->end_date);
        $interval = $sdate->diff($edate);
        $days = $interval->format('%a');
        $total = $package->price * $days;
        $dp = $total * 0.2;
        $dueDate = now()->add(15, 'days');


        $createBooking = $booking->create([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $request->email,
            'total' => $total,
            'dp' => $dp,
            'due_date' => $dueDate
        ]);

        $createBooking->car()->create([
            'car_rent_id' => $request->car_rent_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'days' => $days,
            'notes' => $request->notes
        ]);
        Mail::to($request->email)->send(new EmailConfirmation($createBooking->id));
        return redirect('/booking/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookings = Booking::findOrFail($id);
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
    public function confirm($id)
    {
        $booking = Booking::findOrFail($id);
        if($booking->email_verified_at !== NULL){
            return view('Booking.confirmed')->with(['confirmed' => true]);
        }
        $booking->update([
            'email_verified_at' => now(),
        ]);
        Mail::to($booking->email)->send(new OrderConfirmation($booking->id));
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
