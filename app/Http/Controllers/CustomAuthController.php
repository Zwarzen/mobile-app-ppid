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
<<<<<<< HEAD
 
=======

>>>>>>> 6fa0483c4747115ce872aa214215bce015364ad4
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin')
                        ->withSuccess('Signed in');
        }
<<<<<<< HEAD
   
        return back()->withErrors('Login details are not valid');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/dashboard');
    }
 
 
 
    // public function registration()
    // {
    //     return view('auth.registration');
    // }
       
 
    // public function customRegistration(Request $request)
    // {  
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);
            
    //     $data = $request->all();
    //     $check = $this->create($data);
          
    //     return redirect("dashboard")->withSuccess('have signed-in');
    // }
 
 
    // public function create(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }    
     
 
    // public function signOut() {
    //     Session::flush();
    //     Auth::logout();
   
    //     return Redirect('login');
    // }
=======
        
        return back()->withErrors('Username atau Password anda salah');
    }
>>>>>>> 6fa0483c4747115ce872aa214215bce015364ad4
}