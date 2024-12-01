<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function index()
    {
        $users = User::where('is_verified', false)->get();
        return view('verification.index', compact('users'));
    }

    public function verify(Request $request){
        $user = User::find($request->get("id"));
        $user ->is_verified = true;
        $user ->save();

        return back()->with("success","User berhasil diverifikasi yeyyyyyyyyyyyyyyyyyyy");
    }

    public function decline(Request $request){
        $user = User::find($request->get("id"));
        $user -> delete();

        return back()->with("success","User berhasil ditolak sadddddddddddd");
    }
}
