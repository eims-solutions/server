<?php

namespace App\Http\Controllers;

use App\Http\Requests\PointRequest;
use App\Models\Point;
use App\Models\Team;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $points = Point::all();

        return response()->json([
            'data' => $points
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PointRequest $request): JsonResponse
    {
        Team::findOrFail($request->team_id)->points()->create($request->validated());

        return response()->json([
            'message' => 'Point created successfully'
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Point $point): JsonResponse
    {
        return response()->json([
            'data' => $point
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PointRequest $request, string $id): JsonResponse
    {
        $point = Point::findOrFail($id);
        $point->update($request->validated());

        return response()->json([
            'message' => 'Point updated successfully'
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        Point::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Point deleted successfully'
        ], Response::HTTP_OK);
    }
}
