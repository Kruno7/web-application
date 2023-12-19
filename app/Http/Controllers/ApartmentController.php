<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;
use Auth;
use App\Models\Message;
use App\Models\Reply;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.apartments.index')->with('apartments', Apartment::all());
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
    public function show(Apartment $apartment)
    {
        return view('user.apartments.show')->with([
            'messages' => Message::all(),
            'apartment' => $apartment,
            'replies'   => Reply::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apartment $apartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apartment $apartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apartment $apartment)
    {
        //
    }

    function getAparmentsByCityId($id) {
        return view('user.apartments.index')->with('apartments', Apartment::all());
    }

    public function contact (Request $request, $id) {
        
        Message::insert([
            'content' => $request->input('content'),
            'user_id' => Auth::user()->id,
            'apartment_id' => $id,
        ]);
        return "Poruka poslana";
        return view('user.apartments.contact');
    }
}
