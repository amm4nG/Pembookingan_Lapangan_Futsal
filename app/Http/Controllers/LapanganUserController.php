<?php

namespace App\Http\Controllers;

use App\Models\Bookingan;
use App\Models\Lapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LapanganUserController extends Controller
{ 
    
    public function index(Request $request)
    {
        $lapangan = Lapangan::where('id', 1)->first();
        $bookingan = Bookingan::where('id_user', Auth::user()->id)->first();
        return view('users.lapangan', compact(['bookingan', 'lapangan']));
    }

    public function store(Request $request)
    {
        $bookingan = new Bookingan();
        if ($request->tanggalMain == null) {
            return response()->json([
                'status' => 'error',
            ]);
        }
        $bookingan->tanggal_main = $request->tanggalMain;
        $bookingan->jam_main = $request->jamMain;
        $bookingan->id_user = Auth::user()->id;
        $bookingan->id_lapangan = 1;
        $bookingan->save();
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function create(Request $request)
    {
        $tanggalMain = Bookingan::where('tanggal_main', $request->tanggalMain)->get();
        if (optional($tanggalMain)->count() > 0) {
            $jamMain = $tanggalMain->pluck('jam_main')->toArray();
            return response()->json([
                'status' => true,
                'tanggalMain' => $request->tanggalMain,
                'jamMain' => $jamMain
            ]);
        } else {
            return response()->json([
                'status' => false
            ]);
        }
    }

    public function destroy($id)
    {
        $bookingan = Bookingan::find($id);
        if(optional($bookingan)->count() > 0){
            $bookingan->delete();
            return response()->json([
                'status' => 'Data Berhasil Dihapus'
            ]);
        } 
    }
}