<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'password' => ['required', 'confirmed', 'min:8']
        ],
    [
        'password.confirmed' => 'Konfirmasi password tidak cocok!',
        'password.min' => 'Panjang password minimal 8 karakter!'
    ]);
        $user = User::find($id); 
        $user->password = Hash::make($request->password);
        $user->save(); 
        $request->session()->flash('status', 'Password berhasil diperbaharui.');
        return back();
    }
}