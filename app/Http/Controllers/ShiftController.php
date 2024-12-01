<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shifts = Shift::orderBy('shift_start')->get();

        return view('shift.index', compact('shifts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shift = $request->validate([
            'shift_start' => 'required',
            'shift_end' => 'required',
        ]);

        Shift::create($shift);

        return back()->with('success', 'Shift berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shift $shift)
    {
        $newShift = $request->validate([
            'shift_start' => 'required',
            'shift_end' => 'required',
        ]);

        $shift->update($newShift);

        return back()->with('success', 'Shift berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shift $shift)
    {
        $shift->delete();

        return back()->with('success', 'Shift berhasil dihapus!');
    }
}
