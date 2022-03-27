<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use App\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function validatedLogin(Request $request){
        $validator = Validator::make($request->all(),[
            "email" => 'required|string',
            "password" => 'required|string'
        ]);
    }

    protected function credentials(Request $request){
       return array_merge($request->only('email','password'),['is_active'=> true]);
    }

    protected function redirectTo(){
        $user = Auth::user();
        $client = Role::where('code_role','Cl1')->first();
        $admin = Role::where('code_role','Ad1')->first();

        if($user->role_id==$admin->id){
            return route('dashboard');
        }

        if($user->role_id==$client->id){
            return route('home');
        }
     }
}
