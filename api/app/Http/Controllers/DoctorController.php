<?php

namespace Marvel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Marvel\Models\Doctor;

class DoctorController extends CoreController
{
    public function index(Request $request)
    {
        $doctors = Doctor::with('schedules')->paginate($request->input('limit', 15));
        return response()->json(['success' => true, 'data' => $doctors]);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:doctors',
            'speciality' => 'nullable|string',
            'experience_years' => 'nullable|integer',
            'languages' => 'nullable|string',
            'location' => 'nullable|string',
            'fee' => 'nullable|numeric',
            'address' => 'nullable|string',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()], 422);
        }

        $data = $request->except(['profile', 'cover_image']);

        // Create folder if not exists
        $uploadPath = public_path('assets/uploads/doctors');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $filename = time() . '_profile_' . $file->getClientOriginalName();
            $file->move($uploadPath, $filename);
            $data['profile'] = 'assets/uploads/doctors/' . $filename;
        }

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '_cover_' . $file->getClientOriginalName();
            $file->move($uploadPath, $filename);
            $data['cover_image'] = 'assets/uploads/doctors/' . $filename;
        }

        $doctor = Doctor::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Doctor created successfully',
            'data' => $doctor
        ], 201);
    }


    public function show($id)
    {
        $doctor = Doctor::with('schedules')->find($id);
        if (!$doctor) {
            return response()->json(['success' => false, 'message' => 'Doctor not found'], 404);
        }
        return response()->json(['success' => true, 'data' => $doctor]);
    }



    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        if (!$doctor) {
            return response()->json(['success' => false, 'message' => 'Doctor not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'email' => 'email|unique:doctors,email,' . $id,
            'speciality' => 'nullable|string',
            'experience_years' => 'nullable|integer',
            'languages' => 'nullable|string',
            'location' => 'nullable|string',
            'fee' => 'nullable|numeric',
            'address' => 'nullable|string',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()], 422);
        }

        $data = $request->except(['profile', 'cover_image']);

        // Directory
        $uploadPath = public_path('assets/uploads/doctors');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        // ✅ Update Profile Image
        if ($request->hasFile('profile')) {

            // Remove old image
            if ($doctor->profile && file_exists(public_path($doctor->profile))) {
                unlink(public_path($doctor->profile));
            }

            $file = $request->file('profile');
            $filename = time() . '_profile_' . $file->getClientOriginalName();
            $file->move($uploadPath, $filename);
            $data['profile'] = 'assets/uploads/doctors/' . $filename;
        }

        // ✅ Update Cover Image
        if ($request->hasFile('cover_image')) {

            // Remove old image
            if ($doctor->cover_image && file_exists(public_path($doctor->cover_image))) {
                unlink(public_path($doctor->cover_image));
            }

            $file = $request->file('cover_image');
            $filename = time() . '_cover_' . $file->getClientOriginalName();
            $file->move($uploadPath, $filename);
            $data['cover_image'] = 'assets/uploads/doctors/' . $filename;
        }

        $doctor->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Doctor updated successfully',
            'data' => $doctor
        ]);
    }


    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        if (!$doctor) {
            return response()->json(['success' => false, 'message' => 'Doctor not found'], 404);
        }

        // Remove Profile Image
        if ($doctor->profile && file_exists(public_path($doctor->profile))) {
            unlink(public_path($doctor->profile));
        }

        // Remove Cover Image
        if ($doctor->cover_image && file_exists(public_path($doctor->cover_image))) {
            unlink(public_path($doctor->cover_image));
        }

        // Delete the doctor record
        $doctor->delete();

        return response()->json([
            'success' => true,
            'message' => 'Doctor deleted successfully'
        ]);
    }
}
