<?php

namespace App\Http\Controllers;

use App\Models\Bookingan;
use Illuminate\Http\Request;

class PembookinganController extends Controller
{
    public function index(){ 
        $bookingan = Bookingan::join('users', 'users.id', '=', 'bookingan.id_user')->select('bookingan.*','users.username', 'users.id as id_user_')->get();
        return view('admin.pembookingan', compact(['bookingan']));
    }

    public function show($id){
        $bookingan = Bookingan::find($id);  
        $bookingan->status_booking = 'yes';
        $bookingan->update();
        return back();
    }

    public function destroy($id){
        Bookingan::find($id)->delete();
        return back();
    }
}