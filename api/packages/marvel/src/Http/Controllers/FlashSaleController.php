<?php

namespace Marvel\Http\Controllers;

use Illuminate\Http\Request;
use Marvel\Models\FlashSale;
use Illuminate\Support\Facades\Validator;

class FlashSaleController extends CoreController
{
    public function index(Request $request)
    {
        $limit = $request->limit ?? 15; // Default 15

        $flashSales = FlashSale::with('product')
            ->where('status', 'active')
            ->paginate($limit);

        return response()->json([
            'success' => true,
            'data' => $flashSales
        ]);
    }

    public function show($id)
    {
        $flashSale = FlashSale::find($id);
        if (!$flashSale) {
            return response()->json(['success' => false, 'message' => 'Flash sale not found'], 404);
        }
        return response()->json(['success' => true, 'data' => $flashSale]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'discount_percentage' => 'required|numeric|min:0|max:100',
            'start_time' => 'required|date|after_or_equal:now',
            'end_time' => 'required|date|after:start_time',
            'status' => 'required|in:active,inactive',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $flashSale = FlashSale::create($request->all());

        return response()->json(['success' => true, 'data' => $flashSale], 201);
    }

    public function update(Request $request, $id)
    {
        $flashSale = FlashSale::find($id);
        if (!$flashSale) {
            return response()->json(['success' => false, 'message' => 'Flash sale not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'discount_percentage' => 'required|numeric|min:0|max:100',
            'start_time' => 'required|date|after_or_equal:now',
            'end_time' => 'required|date|after:start_time',
            'status' => 'required|in:active,inactive',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $flashSale->update($request->all());

        return response()->json(['success' => true, 'data' => $flashSale]);
    }

    public function destroy($id)
    {
        $flashSale = FlashSale::find($id);
        if (!$flashSale) {
            return response()->json(['success' => false, 'message' => 'Flash sale not found'], 404);
        }

        $flashSale->delete();

        return response()->json(['success' => true, 'message' => 'Flash sale deleted successfully']);
    }
}
