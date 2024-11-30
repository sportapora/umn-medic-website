<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use Storage;
use Carbon\Carbon;

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

            $attendance->shift_time = Carbon::parse($attendance->shift_time)->format('H:i');
            $attendance->absen_time = Carbon::parse($attendance->created_at)->format('H:i');

            $attendance->photo_url = Storage::url($attendance->photo);
        }
        return view('attendance.index', ['attendances' => $attendances, 'date'=>$date]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendance.create');
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
        $shift_time = Carbon::parse($request->shift_time);

        $early = $shift_time->subMinutes(15)->greaterThan($current_time);
        if($early){
            return back()->withErrors(['shift_time' => 'Too early to submit attendance for this shift.']);
        }

        $is_late = Carbon::now()->subMinutes(15)->greaterThan(Carbon::parse($request->shift_time));
        $path = $request->file('photo')->storePublicly('absen', 'public');

        $attendance = new Attendance();
        $attendance->user_id = $request->user_id;
        $attendance->shift_time = Carbon::parse($request->shift_time);
        $attendance->status = $is_late ? 'late' : 'safe';
        $attendance->photo = $path;
        $attendance->save();

        return redirect('/attendance');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
