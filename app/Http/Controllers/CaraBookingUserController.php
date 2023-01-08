<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaraBookingUserController extends Controller
{
    public function index()
    {
        return view('users.cara-booking');
    }
}