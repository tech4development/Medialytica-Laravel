<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Advertiser;

class CheckAdvertiser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

        public function handle(Request $request, Closure $next)
        {
            // Check if the user is authenticated
            if (Auth::guard('advertiser')->check()) {
                $advertiserId = Auth::guard('advertiser')->user()->id;

                // Check if the advertiser_id exists in the advertisers table
                if (Advertiser::find($advertiserId)) {
                    return $next($request);
                }
            }

            // If not authenticated or advertiser does not exist, abort with 403
            return abort(403, 'Unauthorized access.');
        }
    }
