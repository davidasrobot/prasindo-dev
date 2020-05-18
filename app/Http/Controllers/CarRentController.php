<?php

namespace App\Http\Controllers;

use App\CarRent;
use Illuminate\Http\Request;

class CarRentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new CarRent();
        $minibuses = $model->where(['category' => 1, 'available' => 1])->get();
        $minivans = $model->where(['category' => 2, 'available' => 1])->get();
        $luxuries = $model->where(['category' => 3, 'available' => 1])->get();
        $buses = $model->where(['category' => 4, 'available' => 1])->get();

        return view('CarRent/index', compact([
            'minibuses',
            'minivans',
            'luxuries',
            'buses'
        ]));
        // return response()->json($minibus);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarRent  $carRent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = CarRent::findOrFail($id);
        $lists = CarRent::where('id', '!=', $id)->get();
        return view('CarRent/show', compact(
            'cars',
            'lists'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarRent  $carRent
     * @return \Illuminate\Http\Response
     */
    public function edit(CarRent $carRent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarRent  $carRent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarRent $carRent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarRent  $carRent
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarRent $carRent)
    {
        //
    }
}
