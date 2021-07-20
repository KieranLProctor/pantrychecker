<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    public function index(): Response
    {
        $companies = Company::all();

        return view('companies.index', ['companies' => $companies]);
    }

    public function create(): Response
    {
        // TODO: Add the other parts of the address but to a formatted result.

        $addresses = Address::all(['id', 'street_address_1']);

        return view('companies.create', ['addresses' => $addresses]);
    }

    public function store(Request $request): Response
    {
        $validated = $request->validate([

        ]);

        Company::create($request->all());

        return redirect()->route('companies.index');
    }

    public function show(Company $company): Response
    {
        return view('companies.show', ['company' => $company]);
    }

    public function edit(Company $company): Response
    {
        //
    }

    public function update(Request $request, Company $company): Response
    {
        //
    }

    public function destroy(Company $company): Response
    {
        //
    }
}
