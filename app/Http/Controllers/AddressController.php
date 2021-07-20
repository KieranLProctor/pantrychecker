<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Country;
use App\Models\State;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AddressController extends Controller
{
    public function index(): Response
    {
        $addresses = Address::all();

        return view('addresses.index', ['addresses' => $addresses]);
    }

    public function create(): Response
    {
        $states = State::all(['id', 'name']);
        $countries = Country::all(['id', 'name']);

        return view('addresses.create', [
            'states' => $states,
            'countries' => $countries
        ]);
    }

    public function store(Request $request): Response
    {
        $validated = $request->validate([
            'street_address_1' => ['required', 'max:255'],
            'street_address_2' => ['max:255'],
            'city' => ['required', 'max:255'],
            'country_id' => ['required'],
            'zipcode' => ['required', 'max:50'],
            'longitude' => ['required'],
            'latitude' => ['required'],
        ]);

        Address::create($request->all());

        return redirect()->route('addresses.index');
    }

    public function show(Address $address): Response
    {
        return view('addresses.show', ['address' => $address]);
    }

    public function edit(Address $address): Response
    {
        //
    }

    public function update(Request $request, Address $address): Response
    {
        //
    }

    public function destroy(Address $address): Response
    {
        //
    }
}
