<?php

namespace App\Http\Middleware;

use Closure;

class AuthUser
{
		public function handle($request, Closure $next)
		{
			//echo '<pre>'.print_r($request, true) .'</pre>';
			return $next($request);
		}
}