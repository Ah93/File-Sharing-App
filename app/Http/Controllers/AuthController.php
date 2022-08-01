<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Validator;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function loginPage()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.register');
    }

      
    /**
     * Write code on Method
     * 
     * @return response()
     */
    public function postLogin(Request $request)
    {
        
        // $request->validate([
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required',
        // ]);

        // $user = User::where('email', '=', $request->email)->first();

        // if($user){
        //     if(Hash::check($request->password, $user->password)){
        //         $request->session()->put('loginId', $user->id);
        //         $request->session()->put('user_name', $user->name);
        //         return redirect()->intended('index');
        //     }else{
        //         return back->with('error'. 'Password not matches.');
        //     }

        // }else{
        //     return back->with('error'. 'This email is not registered.');
        // }

        $this->validate($request, [
            'login'    => 'required',
            'password' => 'required',
        ]);
    
        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL ) 
            ? 'email' 
            : 'username';
    
        $request->merge([
            $login_type => $request->input('login')
        ]);    

        if (Auth::attempt($request->only($login_type, 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('index');
        }
  
        return redirect("/")->with('error', 'You have entered invalid credentials');

    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("/")->withSuccess('Great! please login.');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])  
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout(Request $request) {

        Session::flush();
        
        Auth::logout();

        return redirect('/');
    }
}