<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function fetchContactUs() {
        
        $contact = ContactUs::all()->map(function($contact){
            return[
                'title' => $contact->nama_acara,
                'start' => $contact->tanggal_acara,
                'status' => $contact->status ? 'Approve' : 'Pending',
            ];
        });

        return response()->json($contact);
    }
}
