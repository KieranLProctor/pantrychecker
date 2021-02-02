<?php

namespace App\Http\Controllers;

use App\Models\InventoryLocation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$inventoryLocations = User::find(Auth::user()->id)->getAllInventoryLocations;
        $inventoryLocations = InventoryLocation::all();

        return view('locations.index', ['inventoryLocations' => $inventoryLocations]);
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
     * @param  \App\Models\InventoryLocation  $inventoryLocation
     * @return \Illuminate\Http\Response
     */
    public function show(InventoryLocation $inventoryLocation)
    {
        return view('locations.show', ['location' => $inventoryLocation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventoryLocation  $inventoryLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(InventoryLocation $inventoryLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventoryLocation  $inventoryLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventoryLocation $inventoryLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventoryLocation  $inventoryLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventoryLocation $inventoryLocation)
    {
        //
    }
}
