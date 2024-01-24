<?php

namespace App\Http\Controllers;

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
    public function index()
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
        $request->validate([
            'guitarName' => 'required',
            'brand' => 'required',
            'year' => ['required', 'integer']
        ]) ;
        // POST
        
        $guitar = new Guitar();

        $guitar->name = strip_tags($request->input('guitarName'));
        $guitar->brand = strip_tags($request->input('brand'));
        $guitar->yearMade = strip_tags($request->input('year'));
        $guitar->save();

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $guitar)
    {
        // GET
        return view('guitars.show', [
            'guitar'=> guitar::findorFail($guitar)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $guitar)
    {
        // GET
        return view('guitars.edit', [
            'guitar'=> guitar::findorFail($guitar)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $guitar)
    {
        $request->validate([
            'guitarName' => 'required',
            'brand' => 'required',
            'year' => ['required', 'integer']
        ]) ;
        // POST
        
        $record = Guitar::findorFail( $guitar ) ;

        $record->name = strip_tags($request->input('guitarName'));
        $record->brand = strip_tags($request->input('brand'));
        $record->yearMade = strip_tags($request->input('year'));
        $record->save();

        return redirect()->route('guitars.show', $guitar);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DELETE
    }
}
