<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'komentar' => 'required',
            'id_user' => 'required' 
        ]);
        $komentar =  new Komentar();
        $komentar->komentar = $request->komentar;
        $komentar->id_user = $request->id_user;
        $komentar->save();
        return response()->json([
            'status' => true
        ]);
    }
}