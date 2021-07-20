<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CountryController extends Controller
{

    public function index(): Response
    {
        $countries = Country::all();

        return view('countries.index', ['countries' => $countries]);
    }

    public function create(): Response
    {
        //
    }

    public function store(Request $request): Response
    {
        //
    }

    public function show(Country $country): Response
    {
        return view('countries.show', ['country' => $country]);
    }

    public function edit(Country $country): Response
    {
        //
    }

    public function update(Request $request, Country $country): Response
    {
        //
    }

    public function destroy(Country $country): Response
    {
        //
    }
}
