<?php

namespace App\Http\Controllers;

use App\Models\IceCream;
use App\Models\IceCreamModel;
use Illuminate\Http\Request;

class IceCreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ice = IceCreamModel::all();
        return view('ice_cream.ice_cream')
            ->with('ice', $ice);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Models\IceCream  $iceCream
     * @return \Illuminate\Http\Response
     */
    public function show(IceCreamModel $iceCream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IceCream  $iceCream
     * @return \Illuminate\Http\Response
     */
    public function edit(IceCreamModel $iceCream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IceCream  $iceCream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IceCreamModel $iceCream)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IceCream  $iceCream
     * @return \Illuminate\Http\Response
     */
    public function destroy(IceCreamModel $iceCream)
    {
        //
    }
}
