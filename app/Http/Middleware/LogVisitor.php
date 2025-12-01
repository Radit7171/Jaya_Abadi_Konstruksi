<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class LogVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // Untuk menghindari spam dari reload cepat (opsional)
        if ($request->isMethod('get') && !$request->ajax()) {

            $exists = Visitor::where('ip_address', $request->ip())
                ->where('created_at', '>', now()->subMinutes(10))
                ->exists();

            if (!$exists) {
                Visitor::create([
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'path' => $request->path()
                ]);
            }
        }

        return $next($request);
    }
}
