<?php namespace Vendor\Name\Http\Middleware;

use Closure;

/**
 * The NameMiddleware class.
 *
 * @package Vendor\Name
 * @author  Dendi Sunandar <dendisunandar@gmail.com>
 */
class NameMiddleware
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
        return $next($request);
    }
}
