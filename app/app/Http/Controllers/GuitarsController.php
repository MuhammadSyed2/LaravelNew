<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuitarFormRequest;
use Illuminate\Http\Request;
use App\Models\Guitar;

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
    public function index() // getAll
    {
        // GET
        return view("guitars.index", [
            "guitars" => Guitar::all(),
            'userInput' => '<script>alert("hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // view form of POST
    {
        // GET
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuitarFormRequest $request) // POST execute
    {
        // POST
        $data = $request->validated();
        Guitar::create($data);

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guitar $guitar) // getById
    {
        // GET
        return view('guitars.show', [
            'guitar'=> $guitar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guitar $guitar) // view form for PUT
    {
        // GET
        return view('guitars.edit', [
            'guitar'=> $guitar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuitarFormRequest $request, Guitar $guitar) // PUT
    {
        // POST
        $data = $request->validated();
        $guitar->update($data);

        return redirect()->route('guitars.show', $guitar->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guitar $guitar) // DELETE
    {
        // DELETE
        // $guitar->delete();
        // return redirect()->route('guitars.index');
    }
}
