<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Model\Admin as Admin;

class AdminMiddleware
{

    public function __construct( Admin $admin )
    {
        $this->admin = $admin;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    

    public function handle($request, Closure $next, $guard = null)
    {
      if (Auth::guard($guard)->guest()) {
        if ($request->ajax()) {
          return response('Unauthorized.', 401);
        } else {
          return redirect()->guest('login');
        }
      } else if (!Auth::guard($guard)->user()->admin) {
        return redirect()->to('/')->withError('Permission Denied');
      }
  
      return $next($request);
    }


}
