<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        $pengajuan = ContactUs::get('tanggal_acara', 'waktu_mulai');
        return view('contactUs.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required',
            'nim' => 'required',
            'nomor_telepon' => 'required',
            'id_line' => 'required',
            'tipe_pengajuan' => 'required',
            'nama_organisasi' => 'required',
            'jabatan' => 'required',
            'nama_acara' => 'required',
            'deskripsi_acara' => 'required',
            'lokasi_acara' => 'required',
            'tanggal_acara' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'jumlah_tim_medis' => 'required',
            'keterangan' => 'required',
        ]);

        ContactUs::create($validated);

        return redirect()->route('form.create')->with('success', 'Form pengajuan berhasil dikirim!');
    }
}
