<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacilitatorRequest;
use App\Models\Facilitator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class FacilitatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $facilitators = Facilitator::all();

        return response()->json([
            'data' => $facilitators
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacilitatorRequest $request): JsonResponse
    {
        Facilitator::create($request->validated());

        return response()->json([
            'message' => 'Facilitator created successfully'
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Facilitator $facilitator): JsonResponse
    {
        return response()->json([
            'data' => $facilitator
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacilitatorRequest $request, string $id): JsonResponse
    {
        $facilitator = Facilitator::findOrFail($id);
        $facilitator->update($request->validated());

        return response()->json([
            'message' => 'Facilitator updated successfully'
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        Facilitator::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Facilitator deleted successfully'
        ], Response::HTTP_OK);
    }
}
