<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SizeController extends Controller
{
    public function index(): Response
    {
        $sizes = Size::all();

        return view('sizes.index', ['sizes' => $sizes]);
    }

    public function create(): Response
    {
        //
    }

    public function store(Request $request): Response
    {
        //
    }

    public function show(Size $size): Response
    {
        return view('sizes.show', ['size' => $size]);
    }

    public function edit(Size $size): Response
    {
        //
    }

    public function update(Request $request, Size $size): Response
    {
        //
    }

    public function destroy(Size $size): Response
    {
        //
    }
}
