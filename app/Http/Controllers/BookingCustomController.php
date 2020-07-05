<?php

namespace App\Http\Controllers;

use App\Airport;
use App\BookingCustom;
use App\Mail\EmailConfirmation;
use App\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingCustomController extends Controller
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
        // $travels = TravelPackage::all();
        $airport = Airport::take(15);
        return view('Form.Booking.custom');
    }

    public function getAirport(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $airport =  Airport::where('name', 'like',  '%'.$cari.'%')->get();
            return response()->json($airport);
        }
    }
    public function getCity(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $airport =  Travel::where('city', 'like',  '%'.$cari.'%')->get();
            return response()->json($airport);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'arrival' => 'required',
            'depature' => 'required',
            'hostel' => 'required',
            'hotel' => 'required',
            'apartement' => 'required',
            'arrangement' => 'required',
            'city' => 'required',
            'type' => 'required',
            'check' => 'required',
            'captcha' => 'required|captcha',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $create = BookingCustom::create($request->all());
        foreach ($request->city as $city) {
            $create->city()->create([
                'city' => $city
            ]);
        }
        Mail::to($request->email)->send(new EmailConfirmation($create->id));
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
