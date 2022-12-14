<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SeekerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return string
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if (Auth::check() && $user->role == 'seekers'){
            if (!$user->is_verified){
                return redirect()->route('seeker.verification');
            }elseif(!$user->is_active){
                return redirect()->route('seeker.profileInactive');
            }
            elseif($user->profileComplete() < 70){
                return redirect()->route('seeker.firstStep');
            }
            else{
                return $next($request);
            }
        }

        toast('Something want wrong, try again', 'warning');
        return back();
    }
}
