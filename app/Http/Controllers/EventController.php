<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $events = Event::all();

        return response()->json([
            'data' => $events
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request): JsonResponse
    {
        Event::create($request->validated());

        return response()->json([
            'message' => "Event successfully created"
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event): JsonResponse
    {
        return response()->json([
            'data' => $event
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, string $id): JsonResponse
    {
        Event::findOrFail($id)->update($request->validated());

        return response()->json([
            'message' => "Event successfully updated"
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        Event::findOrFail($id)->delete();

        return response()->json([
            'message' => "Event successfully deleted"
        ], Response::HTTP_OK);
    }
}
