<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    // protected $redirectTo = '/home';

    protected function redirectTo()
    {
        $user = \Auth::user();
        switch ($user) {
            case $user->isAdmin():
                // return 'admin/menu/dashboard';
                return route('admindashboards');
                break;
            case $user->isUser():
                // return 'layout/user/menu/dashboard';
                return route('userdashboards');
                break;
        }

        // if (\Auth::user()->isAdmin()) {
        //     return route('admindashboards');
        // }

        // return redirect('admindashboards');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function email()
    {
        return 'email';
    }
}
