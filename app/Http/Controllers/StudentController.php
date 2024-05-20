<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $students = Student::all();

        return response()->json([
            'data' => $students,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        Section::findOrFail($request->section_id)->students()->create($request->validated());

        return response()->json([
            'message' => "Student created successfully"
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student): JsonResponse
    {
        return response()->json([
            'data' => $student,
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function search(string $key): JsonResponse
    {
        $students = Student::where('first_name', 'like', "%$key%")
            ->orWhere('middle_name', 'like', "%$key%")
            ->orWhere('last_name', 'like', "%$key%")
            ->get();

        return response()->json([
            'data' => $students,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id): JsonResponse
    {
        Student::findOrFail($id)->update($request->validated());

        return response()->json([
            'message' => "Student updated successfully"
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        Student::findOrFail($id)->delete();

        return response()->json([
            'message' => "Student deleted successfully"
        ], Response::HTTP_ACCEPTED);
    }
}
