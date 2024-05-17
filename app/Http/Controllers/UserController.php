<?php

namespace App\Http\Controllers;

use App\Enums\PermissionEnum;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        // $this->authorize('users.read', User::class);
        $user = User::all();

        return response()->json([
            'data' => $user,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request): JsonResponse
    {
        $this->authorize(PermissionEnum::CAN_CREATE_USERS->value, User::class);
        User::create($request->validated());

        return response()->json([
            'message' => "User created successfully"
        ], Response::HTTP_ACCEPTED);

        // return response()->json([
        //     'message' => 'User not authorized',
        // ], Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): JsonResponse
    {
        // $user = User::find($id);

        // if (!$user) {
        //     return response()->json([
        //         'message' => 'User not found',
        //     ], Response::HTTP_NOT_FOUND);
        // }
        return response()->json([
            'data' => $user,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id): JsonResponse
    {
        $user = User::find($id);
        $user->update($request->validated());

        return response()->json([
            'message' => 'User updated successfully',
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        User::destroy($id);

        return response()->json([
            'message' => 'User deleted successfully',
        ], Response::HTTP_ACCEPTED);
    }
}
