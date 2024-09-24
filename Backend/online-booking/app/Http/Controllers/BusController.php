<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BusDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'date' => 'required|date',

        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $buses = BusDetail::select('bus_details.*', 'destinations.*') // Select all columns from both tables
            ->join('destinations', 'bus_details.destination_id', '=', 'destinations.id') // Inner join with destinations table
            ->where('destinations.from', $request->input('from'))
            ->where('destinations.to', $request->input('to'))
            ->where('bus_time', $request->input('date'))

            ->get();

        return response()->json($buses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bus_no' => 'required|string|max:255',
            'bus_driver_name' => 'required|string|max:255',
            'driver_mob_no' => 'required|string|max:10',
            'bus_time' => 'required|date',
            'destination_id' => 'required|integer|exists:destinations,id'
        ]);

        $bus = BusDetail::create($request->all());

        return response()->json($bus, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bus = BusDetail::find($id);

        if (!$bus) {
            return response()->json(['message' => 'Bus not found'], 404);
        }

        return response()->json($bus);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bus = BusDetail::find($id);

        if (!$bus) {
            return response()->json(['message' => 'Bus not found'], 404);
        }

        $request->validate([
            'bus_no' => 'sometimes|string|max:255',
            'bus_driver_name' => 'sometimes|string|max:255',
            'driver_mob_no' => 'sometimes|string|max:10',
            'bus_time' => 'sometimes|date',
            'destination_id' => 'sometimes|integer|exists:destinations,id'
        ]);

        $bus->update($request->all());

        return response()->json($bus);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bus = BusDetail::find($id);

        if (!$bus) {
            return response()->json(['message' => 'Bus not found'], 404);
        }

        $bus->delete();

        return response()->json(['message' => 'Bus deleted successfully']);
    }
}
