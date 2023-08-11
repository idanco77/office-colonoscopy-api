<?php

namespace App\Http\Middleware;

use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $admin = User::query()->first();
        if (! $admin) {
            abort(403, 'Access denied');
        }
        if ($request->header('Authorization') !== $admin->token) {
            abort(403, 'Access denied');
        }

        if (Carbon::parse($admin->token_expiration_at)->isBefore(now())) {
            abort(403, 'Access denied');
        }

        return $next($request);
    }
}
