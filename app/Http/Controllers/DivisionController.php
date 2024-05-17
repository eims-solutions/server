<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Requests\DivisionRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $divisions = Division::all();

        return response()->json([
            'data' => $divisions,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DivisionRequest $request): JsonResponse
    {
        Division::create($request->validated());

        return response()->json([
            'message' => "Division created successfully"
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Division $division): JsonResponse
    {
        return response()->json([
            'data' => $division,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DivisionRequest $request, string $id)
    {
        Division::findOrFail($id)->update($request->validated());

        return response()->json([
            'message' => "Division updated successfully"
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Division::findOrFail($id)->delete();

        return response()->json([
            'message' => "Division deleted successfully"
        ], Response::HTTP_ACCEPTED);
    }
}
