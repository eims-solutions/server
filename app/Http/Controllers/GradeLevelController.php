<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\GradeLevel;
use Illuminate\Http\Request;
use App\Enums\PermissionEnum;
use App\Http\Requests\GradeLevelRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class GradeLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $this->authorize(PermissionEnum::CAN_READ_GRADE_LEVELS->value, User::class);
        $gradeLevel = GradeLevel::all();

        return response()->json([
            'data' => $gradeLevel,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GradeLevelRequest $request): JsonResponse
    {
        $this->authorize(PermissionEnum::CAN_CREATE_GRADE_LEVELS->value, User::class);
        GradeLevel::create($request->validated());

        return response()->json([
            'message' => "Grade level created successfully"
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource.
     */
    public function show(GradeLevel $gradeLevel): JsonResponse
    {
        // $gradeLevel = GradeLevel::find($id);

        // if (!$gradeLevel) {
        //     return response()->json([
        //         'message' => 'Grade level not found',
        //     ], Response::HTTP_NOT_FOUND);
        // }
        return response()->json([
            'data' => $gradeLevel,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GradeLevelRequest $request, string $id)
    {
        GradeLevel::findOrFail($id)->update($request->validated());

        return response()->json([
            'message' => 'Grade level updated successfully',
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GradeLevel $gradeLevel): JsonResponse
    {
        GradeLevel::destroy($gradeLevel->id);

        return response()->json([
            'message' => 'Grade level deleted successfully',
        ], Response::HTTP_ACCEPTED);
    }
}
