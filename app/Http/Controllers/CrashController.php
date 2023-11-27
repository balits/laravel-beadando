<?php

namespace App\Http\Controllers;

use App\Models\Crash;
use Illuminate\Http\Request;

class CrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Crash $crash)
    {
        //
        return view('/crashes/single-crash', ["crash" => $crash]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crash $crash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crash $crash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crash $crash)
    {
        //
    }
}
