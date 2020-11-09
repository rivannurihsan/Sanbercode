<?php

namespace App\Http\Middleware;
use Carbon\Carbon;

use Closure;
use Auth;

class DateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $current_date = Carbon::now()->day;
        if($current_date >= 1 && $current_date <= 7){
            return $next($request);
        }
        abort(403);
    }
}
