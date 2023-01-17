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

    public function update(Request $request, $id)
    {
        $request->validate([
            'harga' => 'required'
        ]);
        
        $lapangan = Lapangan::find($id);
        if($request->diskon != null){
            $lapangan->diskon = $request->diskon;
        }
        $lapangan->harga = $request->harga;
        $lapangan->update();
        return back();
    }

    public function show($id)
    {
        $lapangan = Lapangan::find($id); 
        $lapangan->diskon = 0;
        $lapangan->update();
        return back();
    }
}