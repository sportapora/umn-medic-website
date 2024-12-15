<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $quotes = Http::get('https://api.quotable.io/random')->json();
        $contactUsCount = ContactUs::count();
        $currentUser = User::role('user')->orderBy('created_at', 'desc')->limit(5)->get();
        $currentPengajuan = ContactUs::orderBy('created_at', 'desc')->limit(5)->get();

        return view('dashboard.index', compact('quotes', 'contactUsCount', 'currentUser', 'currentPengajuan'));
    }
}
