<?php

namespace App\Http\Controllers;

use App\Booking;
use App\CarRent;
use App\CarRentPackage;
use App\Mail\EmailConfirmation;
use App\Mail\OrderConfirmation;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

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
        // $cars = CarRent::all();
        $cars = CarRentPackage::orderBy('car_rent_id', 'asc')->get();
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
            // 'end_date' => 'required',
            'car_rent_id' => 'required',
            'captcha' => 'required|captcha',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $package = CarRentPackage::findOrFail($request->car_rent_id);
        $sdate = new DateTime($request->start_date);
        // $edate = new DateTime($request->end_date);
        // $interval = $sdate->diff($edate);
        // $days = $interval->format('%a');
        $total = $package->price;
        $dp = $total * 0.2;
        $dueDate = now()->add(15, 'days');


        $createBooking = $booking->create([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $request->email,
            'total' => $total,
            'dp' => $dp,
            'due_date' => $dueDate,
            'uuid' => Uuid::uuid4()->toString()
        ]);

        $createBooking->car()->create([
            'car_rent_id' => $request->car_rent_id,
            'start_date' => $request->start_date,
            // 'end_date' => $request->end_date,
            // 'days' => $days,
            'notes' => $request->notes
        ]);
        if(Auth::check()){
            if (auth()->user()->email_verified_at !== null) {
                Mail::to($request->email)->send(new OrderConfirmation($createBooking->uuid));
            }
            Mail::to($request->email)->send(new EmailConfirmation($createBooking->uuid));
        }else{
            Mail::to($request->email)->send(new EmailConfirmation($createBooking->uuid));
        }
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
