<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

final class Authenticate extends Middleware
{
    protected function redirectTo($request): null|string
    {
        if ( ! $request->expectsJson()) {
            return route(
                name: 'login',
            );
        }

        return null;
    }
}
