<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Session;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    //Authentication for multiple role in one function.....
    public function login_store(Request $request){
       
        $email = $request['email'];
        $pass = $request['pass'];
        $role = $request['role'];
        
       //validation
     
        $credintial = [
            'email' => $email,
            'password' => $pass,
            'role_id' => $role
        ];
        //print_r($credintial);die;   
        
        if(Auth::attempt($credintial)){
            $user = Auth::user();
            /*  echo "<pre>";
            print_r($user);die; */
            if ($user->role_id == $request->role) {
               // $request->session()->put('user_id', $user->user_id);//auth()->user()->user_id

                switch ($user->role_id) {
                    case 1:
                        $request->session()->put('user_id', $user->user_id);
                        return redirect()->route('Dashboard')->with('success', 'Admin Logged In');
                    case 2:
                        $request->session()->put('user_id', $user->user_id);
                        return redirect()->route('home')->with('success_user', 'User Logged In');
                    case 3:
                        $request->session()->put('volunteer_id', $user->user_id);
                        return redirect()->route('home')->with('success_volunteer', 'Volunteer Logged In');
                }
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Role mismatch');
            }
        }else{
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
    }
    //logout code
    public function logout(Request $request){
        Auth::logout();
         $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('login');
    }
}
