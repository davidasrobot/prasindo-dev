<?php

namespace App\Http\Controllers;

use App\Booking;
use App\GolfPackage;
use App\Mail\EmailConfirmation;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingGolfController extends Controller
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
        $golves = GolfPackage::all();
        return view('Form.Booking.golf', compact('golves'));
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
            'pax' => 'required|max:4',
            'start_date' => 'required',
            'end_date' => 'required',
            'golf_package_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
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
