<?php

namespace App\Http\Middleware;

use App\Http\Controllers\UserController;
use Closure;

class GenerateJwtAfterBasicAuth
{
    public function handle($request, Closure $next)
    {
        try {
            $authorizationHeader = $request->header('Authorization');
            [$basic, $payload] = explode(' ', $authorizationHeader);
            if ($basic == 'Basic' && $payload != null) {
                $str = base64_decode($payload);
                [$username, $password] = explode(':', $str);

                $userController = new UserController();
                $userController->basicAuthenticate($username, $password);

                return $next($request);
            }
            else {
                return response(status: 401);
            }
        }
        catch (\Exception) {
            return response(status: 401);
        }
    }
}
