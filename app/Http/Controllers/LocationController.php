<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{


    public function index(): Response
    {
        $locations = User::find(Auth::id())->locations;

        return view('locations.index', ['locations' => $locations]);
    }

    public function create(): Response
    {
        return view('locations.create');
    }

    public function store(Request $request): Response
    {
        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'description' => ['max:255'],
        ]);

        Location::create([
            'user_id' => Auth::id(),
            'name' => $request['name'],
            'description' => $request['description'],
        ]);

        return redirect()->route('locations.index');
    }

    public function show(Location $location): Response
    {
        return view('locations.show', ['location' => $location]);
    }

    public function edit(Location $location): Response
    {
        //
    }

    public function update(Request $request, Location $location): Response
    {
        //
    }

    public function destroy(Location $location): Response
    {
        //
    }
}
