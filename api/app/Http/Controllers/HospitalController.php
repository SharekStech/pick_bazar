<?php

namespace Marvel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Hospital;
use Illuminate\Http\JsonResponse;

class HospitalController extends CoreController
{
    public function index(): JsonResponse
    {
        $hospitals = Hospital::paginate(15);
        return response()->json([
            'success' => true,
            'message' => 'Hospitals retrieved successfully.',
            'data' => $hospitals,
        ]);
    }

    public function show($id): JsonResponse
    {
        $hospital = Hospital::find($id);
        if (!$hospital) {
            return response()->json([
                'success' => false,
                'message' => 'Hospital not found.',
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Hospital retrieved successfully.',
            'data' => $hospital,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $hospital = Hospital::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Hospital created successfully.',
            'data' => $hospital,
        ], 201);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $hospital = Hospital::find($id);
        if (!$hospital) {
            return response()->json([
                'success' => false,
                'message' => 'Hospital not found.',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'address' => 'sometimes|required|string|max:255',
            'status' => 'sometimes|in:active,inactive',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $hospital->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Hospital updated successfully.',
            'data' => $hospital,
        ]);
    }

    public function destroy($id): JsonResponse
    {
        $hospital = Hospital::find($id);
        if (!$hospital) {
            return response()->json([
                'success' => false,
                'message' => 'Hospital not found.',
            ], 404);
        }

        $hospital->delete();

        return response()->json([
            'success' => true,
            'message' => 'Hospital deleted successfully.',
        ]);
    }
}
