<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('login/login');
    }  


    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('login')
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

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('admin')
<<<<<<< HEAD
                             ->withSuccess('Signed in');
=======
                        ->withSuccess('Signed in');
        }elseif (Auth::guard('kominfo')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('kominfoadmin')
                        ->withSuccess('Signed in');
        }                
>>>>>>> abeb06fedaf4ef4b409a3064bfe5c2907d867d78

        }elseif (Auth::guard('kominfo')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('kominfoadmin')
                             ->withSuccess('Signed in');
        
        }elseif (Auth::guard('ppid')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('ppidadmin')
                             ->withSuccess('Signed in');
            
        }return back()->withErrors('Username atau Password anda salah');
    

    }

    public function logout(Request $request)
   
    {
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
<<<<<<< HEAD
        }elseif (Auth::guard('kominfo')->check()) {
            Auth::guard('kominfo')->logout();
        }elseif (Auth::guard('ppid')->check()) {
            Auth::guard('ppid')->logout();
        }
=======
        }elseif(Auth::guard('kominfo')->check()){
            Auth::guard('kominfo')->logout();
        }
 
>>>>>>> abeb06fedaf4ef4b409a3064bfe5c2907d867d78
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/dashboard');
    }

}