<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/users/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'User not found.'
                ], 404);
            }
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/grade-levels/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Grade Level not found.'
                ], 404);
            }
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/sections/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Section not found.'
                ], 404);
            }
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/students/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Student not found.'
                ], 404);
            }
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/divisions/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Division not found.'
                ], 404);
            }
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/teams/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Team not found.'
                ], 404);
            }
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/events/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Event not found.'
                ], 404);
            }
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/categories/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Category not found.'
                ], 404);
            }
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/locations/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Location not found.'
                ], 404);
            }
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/facilitators/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Facilitator not found.'
                ], 404);
            }
        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/points/*')) { // <- Add your condition here
                return response()->json([
                    'message' => 'Points not found.'
                ], 404);
            }
        });
    }
}
