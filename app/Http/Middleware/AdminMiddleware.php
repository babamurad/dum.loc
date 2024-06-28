<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming HTTP request and return the response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Проверяем, авторизован ли пользователь и является ли он администратором
        if (Auth::check()){
            if (Auth::user()->utype == 'ADM') {
                return $next($request);
            }
            return redirect()->route('home');
        }


        // Если пользователь не авторизован или не является администратором, перенаправляем его
         // Или на любую другую страницу
        abort(404);
//        return redirect('/')->route('home');
    }
}
