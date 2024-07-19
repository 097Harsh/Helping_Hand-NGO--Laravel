<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    //registration Code
    public function registration_store(Request $request){
        // Increase memory limit if needed
    ini_set('memory_limit', '1024M');

    // Create a new user instance
    $user = new User;

    // Retrieve passwords from the request
    $pass = $request['password'];
    $cpass = $request['cpassword'];

    // Check if passwords match
    if ($pass == $cpass) {
        // Assign user details from the request
        $user->name = $request['uname'];
        $user->email = $request['email'];
        $user->contact = $request['contact'];
        $user->city_id = $request['city'];
        $user->area_id = $request['area'];
        $user->role_id = $request['role'];
        $user->gender = $request['gender'];
        $user->address = $request['address'];
        $user->DOB = $request['date'];
        $user->password = bcrypt($pass);
        $user->email_verified_at = now();

        // Handle file upload
        if ($request->hasFile('f')) {
            $file = $request->file('f');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('user/upload', $imageName, 'public');
            $user->image = $imageName;
        }

        // Save the user to the database
        $user->save();

            return redirect()->route('login')->with('registered','Registration successfully...');
        }
        else{
            return redirect()->route('register')->with('error','password are not matched');
        }
        /*
        echo "<pre>";
        print_r($request); echo "</pre>";die;*/
    }
}
