<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function fetchContactUs()
    {
        $contact = ContactUs::all()->map(function ($contact) {
            return [
                'title' => $contact->nama_acara,
                'start' => $contact->tanggal_acara,
                'status' => $contact->status,
                'nama' => $contact->nama_lengkap,
                'waktu' => Carbon::parse($contact->waktu_mulai)->format('H:i') . ' - ' . Carbon::parse($contact->waktu_selesai)->format('H:i'),
                'lokasi' => $contact->lokasi_acara
            ];
        });

        return response()->json($contact);
    }
}
