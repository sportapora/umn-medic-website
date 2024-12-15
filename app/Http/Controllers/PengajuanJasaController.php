<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class PengajuanJasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuan = ContactUs::orderBy('tanggal_acara', 'desc')->get();

        return view('pengajuanJasa.index', compact('pengajuan'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $pengajuan_jasa)
    {
        return view('pengajuanJasa.show', compact('pengajuan_jasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $pengajuan_jasa)
    {
        $status = $request->validate([
            'status' => 'required|string',
        ]);

        $pengajuan_jasa->update($status);

        return back()->with('success', 'Pengajuan Jasa Berhasil Disetujui');
    }

}
