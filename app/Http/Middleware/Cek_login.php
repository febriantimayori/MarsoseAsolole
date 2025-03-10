<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        $rtNumber = $request->route('rt');

        if ($user->level->level_kode == $roles || $user->level->level_kode == 'RT'.$rtNumber) {
            return $next($request);
        } else {
            // return redirect('logout');
        } 

        return redirect('login')->with('error', 'Maaf anda tidak memiliki akses');
    }
}
