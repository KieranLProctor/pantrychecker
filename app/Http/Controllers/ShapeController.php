<?php

namespace App\Http\Controllers;

use App\Models\Shape;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ShapeController extends Controller
{
    public function index(): Response
    {
        $shapes = Shape::all();

        return view('shapes.index', ['shapes' => $shapes]);
    }

    public function create(): Response
    {
        //
    }

    public function store(Request $request): Response
    {
        //
    }

    public function show(Shape $shape): Response
    {
        return view('shapes.index', ['shape' => $shape]);
    }

    public function edit(Shape $shape): Response
    {
        //
    }

    public function update(Request $request, Shape $shape): Response
    {
        //
    }

    public function destroy(Shape $shape): Response
    {
        //
    }
}
