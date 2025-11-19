<?php

namespace Marvel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Marvel\Database\Models\Store;
use Marvel\Http\Requests\Store\CreateRequest;
use Marvel\Http\Requests\Store\UpdateRequest;
use Marvel\Enums\Permission;

class StoreController extends CoreController
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware('permission:' . Permission::SUPER_ADMIN);
    }


      public function index(Request $request): JsonResponse
    {
        try {
            $offices = Store::with(['office:id,name'])
                ->paginate($request->input('limit', 15));

            return response()->json([
                'success' => true,
                'message' => 'Store retrieved successfully',
                'data' => $offices
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve Store',
                'data' => []
            ], 500);
        }
    }

    public function show(Store $store): JsonResponse
    {
        try {
            return response()->json([
                'success' => true,
                'message' => 'Store retrieved successfully',
                'data' => $store
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Store not found',
                'data' => []
            ], 404);
        }
    }

    public function store(CreateRequest $request): JsonResponse
    {
        try {
            $store = Store::create($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Store created successfully',
                'data' => $store
            ], 201);
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Failed to create store',
                'data' => []
            ], 500);
        }
    }

    public function update(UpdateRequest $request, $id): JsonResponse
    {
        try {
            $store = Store::find($id);
            if (!$store) {
                return response()->json([
                    'success' => false,
                    'message' => 'Store not found'
                ], 404);
            }

            $store->update($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Store updated successfully',
                'data' => $store
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update store'
            ], 500);
        }
    }



    public function destroy(Store $store): JsonResponse
    {
        try {
            $store->delete();

            return response()->json([
                'success' => true,
                'message' => 'Store deleted successfully',
                'data' => []
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete Store.',
                'data' => []
            ], 500);
        }
    }
}
