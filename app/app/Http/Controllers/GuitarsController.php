<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // GET
        return view("guitars.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // GET
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // POST
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // GET
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // GET
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // POST
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DELETE
    }
}
