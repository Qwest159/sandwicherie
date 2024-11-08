<?php

namespace App\Http\Controllers;

use App\Models\Sandwich;
use Illuminate\Http\Request;

class SandwichController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sandwichs = Sandwich::query()->select('id', 'name', 'ingredients', 'prix')
            ->paginate(12);

        return view('front.sandwich.index', [
            'sandwichs' => $sandwichs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
