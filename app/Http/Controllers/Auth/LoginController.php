<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    //protected $redirectTo = '/personalpage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {

        if(Auth::user()->role == 'admin'){
            $this->redirectTo = '/';
            return $this-> redirectTo;
        }

        if(Auth::user()->role == 'customer'){
            $this->redirectTo = '/personalpage';
            return $this-> redirectTo;
        }

        if(Auth::user()->role == 'service provider'){
            $this->redirectTo = '/servproviderpage';
            return $this-> redirectTo;
        }
        /*if(Auth::user()->hasRole('admin')){
            $this->redirectTo = '/';
            return $this-> redirectTo;
        }

        if(Auth::user()->hasRole('customer')){
            $this->redirectTo = '/personalpage';
            return $this-> redirectTo;
        }
        if(Auth::user()->hasRole('serviceprovider')){
            $this->redirectTo = '/servproviderpage';
            return $this-> redirectTo;
        }*/
    }
}
