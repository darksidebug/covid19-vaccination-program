<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    //
    public function index(){
        return view('pages.login');
    }

    public function loginUser(Request $request){

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $id = Auth::user()->username;

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Invalid Credentials',
        ]);
    }

    public function registerUser(Request $request){

        // $attempt = Auth::attempt(['id'=> $request->input('auth_id')]);
        // if(!$attempt)
        // {
        //     return response()->json(['status' => 'error', 'errors' => 'Invalid User']);
        // }

        $validation = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'user_type' => 'required',
            'password' => 'required',
            'municipality' => 'required'
        ]);

        if($validation->fails()){
            return response()->json(['status' => 'error', 'errors' => $validation->errors()]);
        }


        if($request->input('password') !== $request->input('confirmPass')){
            return response()->json(['status' => 'error', 'errors' => 'Password does not match']);
        }


        User::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'username' => $request->input('username'),
            'user_type' => $request-> input('user_type'),
            'password' => Hash::make($request->input('password')),
            'municipality' => $request->input('municipality')
        ]);

        return response()->json(['status' => 'success']);
    }

    public function updatePassword(Request $request){


        $validation = Validator::make($request->all(),[
            'oldpassword' => 'required',
            'newpassword' => 'required',
        ]);

        if($validation->fails()){
            return response()->json(['status' => 'error', 'errors' => $validation->errors()]);
        }

        $users = Auth::attempt(['id' => $request->input('auth_user'), 'password' => $request->input('oldpassword')]);
        if(!$users){
            return response()->json(['status' => 'error', 'errors' => 'Invalid Old Password']);
        }


        $passwordCheck = $this->PasswordValidate($request->input('newpassword'), $request->input('confirmPass'));
        if(!$passwordCheck)
        {
            return response()->json(['status' => 'error', 'errors' => 'Password does not match']);
        }

        $user = User::find($request->input('auth_user'));
        $user->password = Hash::make($request->input('newpassword'));
        $user->save();

        return response()->json(['status' => 'success']);

    }


    public function returnDashboard(){
        return view('pages.dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }



    // Custom Functions

    public function PasswordValidate($Password, $ConfirmPassword){
        if($Password !== $ConfirmPassword){
            return false;
        }

        return true;
    }

    // function checkAuth($requestId){
    //     if($requestId !== Auth::id())
    //     {
    //         return response()->json(['status' => 'error', 'errors' => 'Password does not match']);
    //     }
    // }

    // function checkPassword($requestPassword, $requestConfirmPassword){
    //     if($requestPassword !== $requestConfirmPassword){
    //         return response()->json(['status' => 'error', 'errors' => 'Password does not match']);
    //     }
    // }
}
