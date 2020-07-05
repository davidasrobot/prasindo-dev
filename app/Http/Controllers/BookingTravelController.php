<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mail\EmailConfirmation;
use App\Mail\OrderConfirmation;
use App\TravelPackage;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

class BookingTravelController extends Controller
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
        $travels = TravelPackage::all();
        return view('Form.Booking.travel', compact('travels'));
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
            // 'end_date' => 'required',
            'travel_package_id' => 'required',
            'captcha' => 'required|captcha',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $dueDate = now()->add(15, 'days');
        $package = TravelPackage::findOrFail($request->travel_package_id);
        $param_one = explode('-', $package->name_price_one);
        $param_one = $this->forloops($param_one);

        $param_two = explode('-', $package->name_price_two);
        $param_two = $this->forloops($param_two);

        $param_three = explode('-', $package->name_price_three);
        $param_three = $this->forloops($param_three);

        $param_four = explode('-', $package->name_price_four);
        $param_four = $this->forloops($param_four);

        $param_five = explode('-', $package->name_price_five);
        $param_five = $this->forloops($param_five);

        $param_six = explode('-', $package->name_price_six);
        $param_six = $this->forloops($param_six);

        $param_seven = explode('-', $package->name_price_seven);
        $param_seven = $this->forloops($param_seven);
        
        if (in_array($request->pax, $param_one)) {
            $total = $package->price_one * $request->pax;   
        } else if(in_array($request->pax, $param_two)) {
            $total = $package->price_two * $request->pax;
        } else if(in_array($request->pax, $param_three)) {
            $total = $package->price_three * $request->pax;
        } else if(in_array($request->pax, $param_four)) {
            $total = $package->price_four * $request->pax;
        } else if(in_array($request->pax, $param_five)) {
            $total = $package->price_five * $request->pax;
        } else if(in_array($request->pax, $param_six)) {
            $total = $package->price_six * $request->pax;
        } else {
            $total = $package->price_seven * $request->pax;
        }

        
        
        $dp = $total * 0.2;
        $createBooking = $booking->create([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $request->email,
            'total' => $total,
            'dp' => $dp,
            'due_date' => $dueDate,
            'uuid' => Uuid::uuid4()->toString()
        ]);

        // $sdate = new DateTime($request->start_date);
        // $edate = new DateTime($request->end_date);
        // $interval = $sdate->diff($edate);
        // $days = $interval->format('%a');

        $createBooking->travel()->create([
            'pax' => $request->pax,
            'travel_package_id' => $request->travel_package_id,
            'note' => $request->notes,
            'start_date' => $request->start_date,
            // 'end_date' => $request->end_date,
            // 'days' => $days
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

    private function forloops($array = [])
    {
        for ($i=$array[0]; $i < $array[1]; $i++) { 
            $array[] = $i;
        }
        return $array;
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
