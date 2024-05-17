<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Section;
use App\Models\GradeLevel;
use Illuminate\Http\Request;
use App\Enums\PermissionEnum;
use App\Http\Requests\SectionRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $this->authorize(PermissionEnum::CAN_READ_SECTIONS->value, User::class);
        $sections = Section::all();

        return response()->json([
            'data' => $sections,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request): JsonResponse
    {
        $this->authorize(PermissionEnum::CAN_CREATE_SECTIONS->value, User::class);
        GradeLevel::findOrFail($request->grade_level_id)->sections()->create($request->validated());

        return response()->json([
            'message' => "Section created successfully"
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section): JsonResponse
    {
        return response()->json([
            'data' => $section,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, string $id)
    {
        Section::findOrFail($id)->update($request->validated());

        return response()->json([
            'message' => "Section updated successfully"
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Section::findOrFail($id)->delete();

        return response()->json([
            'message' => "Section deleted successfully"
        ], Response::HTTP_ACCEPTED);
    }
}
