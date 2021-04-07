<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected function redirectTo()
    {
        if (Auth::user()->user_type == 'admin' || 'user')
        {
            return 'dashboard';


        }
        else
        {
            return '/';

        }
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

//    protected function credentials(Request $request)
//    {
//
//
//        return ['email'=>$request->{$this->username()},'password'=>$request->password,'isban'=>'0']
//            ;
//    }

//    public function authenticated (Request $request)
//    {
//        $request->validate([
//
//            'email' => 'required',
//            'password' => 'required',
//        ]);
//
//        $email = $request->email;
//        $password = $request->password;
//
//        if (Auth::attempt(['email'=>$email,'password'=>$password,'isban'=>1])){
//            return redirect()->intended('dashboard');
//        }
//
//
//        else{
//            return redirect('login')->with('message','Your account has been banned............');
//        }
//    }

    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $credentials['isban'] = 0;

        return $credentials;
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];

        // Load user from database
        $user = \App\User::where($this->username(), $request->{$this->username()})->first();

        // Check if user was successfully loaded, that the password matches
        // and active is not 1. If so, override the default error message.
        if ($user && \Hash::check($request->password, $user->password) && $user->isban != 0) {
            $message  = [$this->username() => 'Your account has been banned.Please contact to the Admin.'];
        }

        if ($request->expectsJson()) {
            return response()->json($message, 422);
        }

        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($message);
    }


}
