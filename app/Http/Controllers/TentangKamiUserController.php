<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiUserController extends Controller
{
    public function index()
    {
        return view('users.tentang-kami');
    }
}