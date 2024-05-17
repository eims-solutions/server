<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $location = Location::all();

        return response()->json([
            'data' => $location
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LocationRequest $request): JsonResponse
    {
        Location::create($request->validated());

        return response()->json([
            "message" => "Location successfully created"
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location): JsonResponse
    {
        return response()->json([
            'data' => $location
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LocationRequest $request, string $id)
    {
        Location::findOrFail($id)->update($request->validated());

        return response()->json([
            "message" => "Location updated successfully"
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        Location::findOrFail($id)->delete();

        return response()->json([
            "message" => "Location deleted successfully"
        ], Response::HTTP_OK);
    }
}
