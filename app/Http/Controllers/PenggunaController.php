<?php

namespace App\Http\Controllers;

use App\Models\Bookingan;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){ 
        $users = User::where('role', 'user')->get();
        return view('admin.pengguna', compact(['users']));
    }

    public function destroy($id){
        User::find($id)->delete();
        Bookingan::where('id_user', $id)->delete();
        return back();
    }
}