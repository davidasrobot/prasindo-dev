<?php

namespace App\Http\Controllers;

use App\Booking;
use App\CarRent;
use App\Mail\EmailConfirmation;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = CarRent::all();
        return view('Form.Booking.car', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
