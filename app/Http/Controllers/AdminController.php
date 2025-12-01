<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // ambil user login

        return view('admin.Dashboard.dashboard', compact('user'));
    }
}
