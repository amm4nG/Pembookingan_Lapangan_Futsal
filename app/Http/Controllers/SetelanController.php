<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class SetelanController extends Controller
{
    public function index(){ 
        $lapangan = Lapangan::all();
        return view('admin.setelan', compact(['lapangan']));
    }
}