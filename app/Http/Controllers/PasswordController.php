<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        dd($user);
    }
}