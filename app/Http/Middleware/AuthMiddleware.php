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
            return null;
        }
        if ($request->header('Authorization') !== $admin->token) {
            return null;
        }

        if (Carbon::parse($admin->token_expiration_at)->isBefore(now())) {
            return null;
        }

        return $next($request);
    }
}
