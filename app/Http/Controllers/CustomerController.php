<?php

namespace App\Http\Controllers;

use App\Models\CustomerLogin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    function customer_register()
    {
        return view('frontend.customer.customer_register');
    }

    function customer_login()
    {
        return view('frontend.customer.customer_login');
    }

    function customer_acc_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => ['min:8|max:10|required|/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/|confirmed'],
            'password_confirmation' => 'required_with:password|same:password|min:8|max:10',
        ], [
            'password' => 'Please put one number, one uppercase and lowercase latter, one number and one special character, Maximum 10 and minimum 8 character',
            'password_confirmation' => 'Your confirm password does not match with the password',
        ]);

        CustomerLogin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Your account has been created!');
    }

    function customer_acc_login(Request $request)
    {
        if (Auth::guard('customerlogin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('index');
        } else {
            return redirect()->route('customer.login')->with('error', 'Your email or password in wrong!');
        }
    }
}