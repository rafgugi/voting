<?php

namespace App\Http\Middleware;

use Closure;
use App\AccessLog;

class AccessLogMiddleware
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
        AccessLog::create([
            'path' => $request->path(),
            'ip' => $request->getClientIp(),
        ]);
        return $next($request);
    }
}
