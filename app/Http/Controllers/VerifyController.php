<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function index()
    {
        $users = User::role('user')->orderBy('created_at')->get();
        return view('verification.index', compact('users'));
    }

    public function verify(User $user){
        $user->is_verified = true;
        $user->save();

        return back()->with("success","User berhasil diverifikasi");
    }

    public function decline(User $user){
        $user -> delete();

        return back()->with("success","User berhasil ditolak");
    }
}
