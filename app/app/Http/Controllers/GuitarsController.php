<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    public static function getData() {
        return [
            ['id' => 1, 'name'=> 'American Standard Strat', 'brand'=> 'Fender'],
            ['id' => 2, 'name' => 'Starla S2', 'brand'=> 'PRS'],
            ['id' => 3, 'name' => 'Explorer', 'brand'=> 'Gibson'],
            ['id' => 4, 'name' => 'Talman', 'brand'=> 'Ibanez'],
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // GET
        return view("guitars.index", [
            "guitars" => self::getData(),
            'userInput' => '<script>alert("hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // GET
        return view('guitars.create');
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
    public function show(string $guitar)
    {
        // GET
        $guitars = self::getData();
        $index = array_search($guitar, array_column($guitars,'id'));

        if ($index === false) {
            abort(404);
        }
        return view('guitars.show', [
            'guitar'=> $guitars[$index]
        ]);
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
