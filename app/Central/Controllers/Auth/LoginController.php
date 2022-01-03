<?php

namespace App\Central\Controllers\Auth;

use App\Central\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller;
use function redirect;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect(route('dashboard'));
    }
}
