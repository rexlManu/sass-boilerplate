<?php

namespace App\Central\Controllers\Auth;

use App\Central\Requests\Auth\RegistrationRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use function redirect;

class RegistrationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegistrationRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            'name' => $data[ 'name' ],
            'email' => $data[ 'email' ],
            'password' => \Hash::make($data[ 'password' ]),
        ]);

//        $tenant = new Tenant();
//        $tenant->user_id = $user->id;
//        $tenant->save();
//        $tenant->domains()->create([
//            'domain' => $data[ 'domain' ] . '.' . config('sass.domain', 'localhost'),
//        ]);

        \Auth::login($user);

        return redirect(route('dashboard'));
    }
}
