<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use App\Models\Shift;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $date = $request->input('date', date('Y-m-d'));
        $attendances = Attendance::whereDate('created_at', $date)->get();
        foreach ($attendances as $attendance){
            $user = User::find($attendance->user_id);
            $attendance->user = $user;

            $shift = Shift::find($attendance->shift_id);
            $attendance->shift = $shift;

            $attendance->shift->shift_start = Carbon::parse($attendance->shift_start)->format('H:i');
            $attendance->absen_time = Carbon::parse($attendance->created_at)->format('H:i');
        }
        return view('attendance.index', ['attendances' => $attendances, 'date'=>$date]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $shifts = Shift::all();
        foreach ($shifts as $shift){
            $shift->shift_start = Carbon::parse($shift->shift_start)->format('H:i');
            $shift->shift_end = Carbon::parse($shift->shift_end)->format('H:i');
        }
        return view('attendance.create', ['shifts' => $shifts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image'
        ]);

        $current_time = Carbon::now();
        $already = Attendance::where('user_id', $request->user_id)->whereDate('created_at', $current_time->toDateString())->exists();
        if($already){
            return back()->withErrors(['user_id' => 'You can not submit attendance more than once a day']);
        }

        $shift = Shift::find($request->shift);
        $shift_time = Carbon::parse($shift->shift_start);
        $early = Carbon::parse($shift_time)->subMinutes(15)->greaterThan($current_time);
        if($early){
            return back()->withErrors(['shift_time' => 'Too early to submit attendance for this shift.']);
        }

        $is_late = $current_time->subMinutes(15)->greaterThan($shift_time);
        $path = $request->file('photo')->store('absen', 'public');

        $attendance = new Attendance();
        $attendance->user_id = $request->user_id;
        $attendance->shift_id = $request->shift;
        $attendance->status = $is_late ? 'late' : 'safe';
        $attendance->tekanan = $request->tekanan;
        $attendance->photo = $path;
        $attendance->save();

        return redirect('/attendance/create')->with('success', 'Attendance submitted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attendance = Attendance::find($id);
        Storage::delete($attendance->photo);
        $attendance->delete();
        return redirect('/attendance');
    }
}
