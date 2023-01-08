<?php

namespace App\Http\Controllers;

use App\Models\Bookingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BokinganSayaController extends Controller
{
    public function index()
    {
        $bookingan = Bookingan::where('id_user', Auth::user()->id)->get();
        return view('users.bookingan-saya', compact(['bookingan']));
    }
}