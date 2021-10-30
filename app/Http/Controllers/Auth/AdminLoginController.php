<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
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
    protected $redirectTo = RouteServiceProvider::ADMIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin_user')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard("admin_user");
    }
    public function showLoginForm()
    {
        return view('auth.admin_login');
    }




    public function login(Request $request)
    {

         $this->validate($request, [
        'name'   => 'required',
        'password' => 'required|string|min:4'
      ]);


         if (Auth::guard('admin_user')->attempt(['name' => $request->name, 'password' => $request->password], $request->remember)) {

        return  $this->sendLoginResponse($request);
      }



        return $this->sendFailedLoginResponse($request);
    }



    protected function authenticated(Request $request, $user)
    {
        $user->login_at = Carbon::now()->toDateTimeString();
        $user->update();
        return redirect($this->redirectTo);
    }


    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 204)
                    : redirect()->intended($this->redirectPath());
    }






}
