<?php

namespace Marvel\Http\Controllers;

use Illuminate\Http\Request;
use Marvel\Enums\Permission;
use Illuminate\Http\JsonResponse;
use Marvel\Database\Models\Office;
use Marvel\Http\Requests\StoreOfficeRequest;
use Marvel\Http\Requests\UpdateOfficeRequest;

class OfficeController extends CoreController
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('permission:' . Permission::SUPER_ADMIN);
    }
    public function index(Request $request): JsonResponse
    {
        try {
            $offices = Office::with('parent', 'children')
                ->paginate($request->input('limit', 15));

            return response()->json([
                'success' => true,
                'message' => 'Offices retrieved successfully',
                'data' => $offices
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve offices',
                'data' => []
            ], 500);
        }
    }

    public function store(StoreOfficeRequest $request): JsonResponse
    {
        try {
            $office = Office::create($request->validated());
            return response()->json([
                'success' => true,
                'message' => 'Office created successfully',
                'data' => $office
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create office',
                'data' => []
            ], 500);
        }
    }

    public function show(Office $office): JsonResponse
    {
        try {
            return response()->json([
                'success' => true,
                'message' => 'Office retrieved successfully',
                'data' => $office
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Office not found',
                'data' => []
            ], 404);
        }
    }

    



public function update(UpdateOfficeRequest $request, Office $office): JsonResponse
{
    try {
        $office->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Office updated successfully',
            'data' => $office
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to update office'
        ], 500);
    }
}



    public function destroy(Office $office): JsonResponse
    {
        try {
            $office->delete();

            return response()->json([
                'success' => true,
                'message' => 'Office deleted successfully',
                'data' => []
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete office.',
                'data' => []
            ], 500);
        }
    }
}
