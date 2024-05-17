<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $teams = Team::all();

        return response()->json([
            'data' => $teams
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request): JsonResponse
    {
        $team = Team::create($request->validated());

        return response()->json([
            'message' => "Team successfully created"
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team): JsonResponse
    {
        return response()->json([
            'data' => $team
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, string $id): JsonResponse
    {
        Team::findOrFail($id)->update($request->validated());

        return response()->json([
            'message' => "Team successfully updated"
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        Team::findOrFail($id)->delete();

        return response()->json([
            'message' => "Team successfully deleted"
        ], Response::HTTP_OK);
    }
}
