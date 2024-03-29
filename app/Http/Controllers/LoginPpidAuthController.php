<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginPpidAuthController extends Controller
{

    public function index()
    {
        return view('login/loginppid');
    }  


    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('loginppid')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }
    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }

    public function customLoginPpid(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('ppid')
                        ->withSuccess('Signed in');
        }

   
        return back()->withErrors('Username atau Password anda salah');
    

    }

    public function logout(Request $request)
   
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/dashboard');
    }

}