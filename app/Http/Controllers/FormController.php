<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('formPengajuan/index');
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

        return redirect()->route('form.create')->with('success', 'Form pengajuan berhasil dikirim!');
    }
}
