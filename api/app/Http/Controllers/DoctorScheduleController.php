<?php

namespace Marvel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Marvel\Models\DoctorSchedule;
use Illuminate\Validation\Rule;

class DoctorScheduleController extends CoreController
{
    public function index(Request $request)
    {
        $schedules = DoctorSchedule::with(['doctor', 'hospital'])->paginate($request->input('limit', 15));
        return response()->json(['success' => true, 'data' => $schedules]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'doctor_id' => 'required|exists:doctors,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'day_of_week' => 'required|array',
            'day_of_week.*' => ['required', Rule::in(['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'])],
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'status' => ['nullable', Rule::in(['active', 'inactive'])]
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()], 422);
        }

        $this->validateNoOverlap($request->doctor_id, $request->hospital_id, $request->day_of_week, $request->start_time, $request->end_time);

        $schedule = DoctorSchedule::create($request->all());

        return response()->json(['success' => true, 'message' => 'Schedule created successfully', 'data' => $schedule], 201);
    }

    public function show($id)
    {
        $schedule = DoctorSchedule::with(['doctor', 'hospital'])->find($id);
        if (!$schedule) {
            return response()->json(['success' => false, 'message' => 'Schedule not found'], 404);
        }
        return response()->json(['success' => true, 'data' => $schedule]);
    }

    public function update(Request $request, $id)
    {
        $schedule = DoctorSchedule::find($id);
        if (!$schedule) {
            return response()->json(['success' => false, 'message' => 'Schedule not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'doctor_id' => 'exists:doctors,id',
            'hospital_id' => 'exists:hospitals,id',
            'day_of_week' => 'array',
            'day_of_week.*' => [Rule::in(['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'])],
            'start_time' => 'date_format:H:i',
            'end_time' => 'date_format:H:i|after:start_time',
            'status' => [Rule::in(['active', 'inactive'])]
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()], 422);
        }

        $this->validateNoOverlap($request->doctor_id ?? $schedule->doctor_id, $request->hospital_id ?? $schedule->hospital_id, $request->day_of_week ?? $schedule->day_of_week, $request->start_time ?? $schedule->start_time, $request->end_time ?? $schedule->end_time, $id);

        $schedule->update($request->all());

        return response()->json(['success' => true, 'message' => 'Schedule updated successfully', 'data' => $schedule]);
    }

    public function destroy($id)
    {
        $schedule = DoctorSchedule::find($id);
        if (!$schedule) {
            return response()->json(['success' => false, 'message' => 'Schedule not found'], 404);
        }

        $schedule->delete();

        return response()->json(['success' => true, 'message' => 'Schedule deleted successfully']);
    }

    private function validateNoOverlap($doctorId, $hospitalId, $daysOfWeek, $startTime, $endTime, $exceptId = null)
    {
        $query = DoctorSchedule::where('doctor_id', $doctorId)
            ->where('hospital_id', $hospitalId)
            ->where(function ($query) use ($startTime, $endTime) {
                $query->where(function ($q) use ($startTime, $endTime) {
                    $q->where('start_time', '<', $endTime)
                        ->where('end_time', '>', $startTime);
                });
            })
            ->where(function ($query) use ($daysOfWeek) {
                foreach ($daysOfWeek as $day) {
                    $query->orWhereJsonContains('day_of_week', $day);
                }
            });

        if ($exceptId) {
            $query->where('id', '!=', $exceptId);
        }

        if ($query->exists()) {
            abort(response()->json(['success' => false, 'message' => 'Schedule overlaps with an existing schedule.'], 422));
        }
    }
}
