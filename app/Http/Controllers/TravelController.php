<?php

namespace App\Http\Controllers;

use App\Travel;
use App\TravelPackage;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inbounds = Travel::where('category', 'inbound')->get();
        $outbounds = Travel::where('category', 'outbound')->get();
        $recomends = Travel::where('recomended', '1')->get();
        $favorites = Travel::where('favorite', '1')->get();
        return view('CityTravel.index', compact([
            'inbounds',
            'outbounds',
            'recomends',
            'favorites'
        ]));
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
     * @param  \App\CityTravel  $cityTravel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $travels = Travel::with('Packages')->findOrFail($id);
        return view('CityTravel.show', compact([
            'travels'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CityTravel  $cityTravel
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
     * @param  \App\CityTravel  $cityTravel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CityTravel  $cityTravel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
