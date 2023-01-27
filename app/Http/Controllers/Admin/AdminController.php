<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use Auth;

class AdminController extends Controller
{
    public function login() {
        return view('admin.auth.login');
    }

    public function loginSubmit(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required | min:6'
        ],
        [
            'email.required' => 'Email ID is Required.',
            'email.email' => 'Please Enter Valid Email Address.',
            'password' => 'Password is Required to Login.',
            'password.min' => 'Password must be at least 6 characters.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // if ($request->rememberme) {
        //     return $request->rememberme;
        // }

        $credentials = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }
        return $request->all();
    }
}
