<?php

namespace App\Http\Controllers\employee\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;


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
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/dashboard';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLogin()
    {
        return view('employee.auth.login');
    }

    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = Employee::where('email',$request->email)->first();
        if(Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->intended(route('employee.dashboard'));
        }
        else
        {
            return redirect()->back()->withInput($request->only('email','remember'))->withMessage("Invalid User name or Passowrd");
        }
    }

    protected function guard()
    {
        return Auth::guard("employee");
    }

}
