<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekRoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) { //cek apakah user telah login
            return redirect('login'); //kembalikan kehalaman login jika user belum login
        }
        $user = Auth::user(); //ambil data user yang login
        if ($user->role == $role) { //cek role/level user
            return $next($request);
        }
        return redirect()->route('home.index');
    }
}