<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Item;
use App\Models\ItemInfo;
use App\Models\ItemType;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = User::find(Auth::id())->items;

        return view('items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $items = Item::all(['id', 'name']);
        $companies = Company::all(['id', 'name']);
        $locations = Location::all(['id', 'name']);

        return view('items.create',
            [
                'items' => $items,
                'companies' => $companies,
                'locations' => $locations,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'description' => ['max:255'],
        ]);

        ItemInfo::create([
            'user_id' => Auth::id(),
            'item_id' => $request['item_id'],
            'purchase_date' => $request['purchase_date'],
            'expiration_date' => $request['expiration_date'],
            'retailer_id' => $request['retailer_id'],
            'purchase_price' => $request['purchase_price'] * 100,
            'location_id' => $request['location_id'],
        ]);

        return redirect()->route('locations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
