<?php

namespace App\Http\Controllers\Auth;

use App\Car;
use App\Http\Controllers\Controller;
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
//    protected $redirectTo = 'cars';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function authenticate(Request $request)
    {
        $username = $request->username;
        $password=$request->password;
//        $modal = 'loginModal';

        if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
            Auth::attempt(['email' => $username, 'password' => $password]);
        } else {
            Auth::attempt(['username' => $username, 'password' => $password]);
        }
        if ( Auth::check() ) {
            return redirect()->route('cars.index');
        }
        return redirect()->back()->withErrors([
            'credentials' => 'Username atau Password Salah'
//            'error_code' => 5,
//            'modal' => 'loginModal'
        ]);
//        $modal = 'loginModal';
//        $cars = Car::all();

//        return view('home-admin2')->with('cars',$cars);
//        return view('welcome')->with(['cars'=>$cars,'modal'=>$modal]);
//        return view('welcome')->with(compact('modal'));
    }
    protected function redirectTo()
    {
        return route('cars.index');
    }

}
