<?php

namespace App\Central\Controllers\Auth;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    /**
     * Log the user out of the application.
     */
    public function __invoke()
    {
        auth()->logout();

        return redirect()->route('auth.login');
    }
}
