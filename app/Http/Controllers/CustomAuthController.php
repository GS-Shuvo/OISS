<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomAuthController extends Controller
{
    public function index()
    {
        if(Auth::check()){

        }
        return view('pages.login');
    }  

      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);   

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        } 
        return redirect("login")->withSuccess('Login details are not valid');

    }


    public function registration()
    {
        return view('pages.register');
    }

      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);           

        $data = $request->all();
        $admin = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
          ]);
            $admin_role = Role::where('name', 'customer')->first();
            $admin->roles()->attach($admin_role);

        return redirect("login")->withSuccess('You Registration complete.');
    }
   

    public function dashboard()
    {
        if(Auth::check()){
            return view('pages.secure.admin.home');
        } 

        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout(); 

        return Redirect('login');

    }
}
