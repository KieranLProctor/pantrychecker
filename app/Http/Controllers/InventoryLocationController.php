<?php

namespace App\Http\Controllers;

use App\Models\InventoryLocation;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class InventoryLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $inventoryLocations = User::find(Auth::id())->getAllInventoryLocations;

        return view('locations.index', ['inventoryLocations' => $inventoryLocations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'description' => ['max:255'],
        ]);

        InventoryLocation::create([
            'user_id' => Auth::id(),
            'name' => $request['name'],
            'description' => $request['description'],
        ]);

        return redirect()->route('locations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param InventoryLocation $inventoryLocation
     * @return Response
     */
    public function show(InventoryLocation $inventoryLocation)
    {
        return view('locations.show', ['location' => $inventoryLocation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param InventoryLocation $inventoryLocation
     * @return Response
     */
    public function edit(InventoryLocation $inventoryLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param InventoryLocation $inventoryLocation
     * @return Response
     */
    public function update(Request $request, InventoryLocation $inventoryLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param InventoryLocation $inventoryLocation
     * @return Response
     */
    public function destroy(InventoryLocation $inventoryLocation)
    {
        //
    }
}
