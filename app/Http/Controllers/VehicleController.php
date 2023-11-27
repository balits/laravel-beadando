<?php

namespace App\Http\Controllers;

use App\Models\Crash;
use App\Models\SearchHistory;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
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
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }

    public function search(Request $request)
    {
        // Crash::all()->each(function ($c) use ($plate) {
        //     \Log::info('osszes: c ' . $c->id . ' ' . $c->description);
        // });
        // $v->crashes()->each(function (Crash $c) {
        //     \Log::info('vehicle 4 crashes: ' . $c->id . ' ' . $c->description);
        // });

        $request->validate([
            "license_plate" => "required|min:6|max:7"
        ]);

        $input_plate = $request->input('license_plate');
        $plate = "nemjo:(";
        if (preg_match('/^[a-zA-Z]{3}-\d{3}$/', $input_plate)) {
            //van -
            $plate = implode('', explode('-', $input_plate));

        } else if (preg_match("/^[a-zA-Z]{3}\d{3}$/", $input_plate)) {
            //nincs -
            $plate = $input_plate;
        }

        $v = Vehicle::where('license_plate', strtoupper($plate))->first();

        /* @var $x Vehicle */



        // VAGY REDIRECT?
        if ($plate == "nemjo:(" || $v == null) {
            return view("home", ["err" => "Nincs ilyen rendszám a nyilvántartásban!"]);
        } else if ($v) {
            $s = new SearchHistory([
                "license_plate" => $plate,
                "time" => date("Y-M-D H:i:s"),
                "user_id" => 1,
            ]);
            $s->save();

            // sort crashes
            return view('home', ['vehicle' => $v]);
        }
    }
}
