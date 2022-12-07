<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }


    public function login()
    {
        return inertia('Auth/Login', [
            'url' => URL::route('login')
        ]);
    }

    public function authenticate(Request $request)
    {
//        $credentials = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);

        $credentials = $request->validate([
            'phone' => 'required'
        ]);
        $user = User::where('phone', $credentials)->first();
        if($user){
            $request->session()->regenerate();
            Auth::login($user);
            if (Auth::user()->role == "admin") {
                toast('Successfully Login !', 'success');
                return redirect()->intended('/panel/admin/dashboard');
            } elseif (Auth::user()->role == "recruiters") {
                toast('Successfully Login !', 'success');
                return redirect()->intended('/panel/recruiters/dashboard');
            } else {
                toast('Successfully Login !', 'success');
                return redirect()->intended('panel/seekers/dashboard');
            }
        }else{
            $user = User::create([
                'role' => 'seekers',
                'phone' => $request->phone,
            ]);
            Auth::login($user);
            $request->session()->regenerate();

            sendOtpUser($user->phone);
            return redirect()->route('seeker.verification');
        }


//        if (Auth::attempt($credentials)) {
//            $request->session()->regenerate();
//            if (Auth::user()->role == "admin") {
//                toast('Successfully Login !', 'success');
//                return redirect()->intended('/panel/admin/dashboard');
//            } elseif (Auth::user()->role == "recruiters") {
//                toast('Successfully Login !', 'success');
//                return redirect()->intended('/panel/recruiters/dashboard');
//            } else {
//                toast('Successfully Login !', 'success');
//                return redirect()->intended('panel/seekers/dashboard');
//            }
//        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function seekerLogin(Request $request){

        $user = User::where('phone', $request->phone)->first();

        if($user){
            $request->session()->regenerate();
            Auth::login($user);
            toast('Successfully Login !', 'success');
            return redirect()->intended('/panel/seekers/dashboard');
        }else{
            $request->validate([
                'phone' => 'required|regex:/(01)[0-9]{9}/|size:11',
            ], [
                'phone.required' => 'Phone Number is required',
                'phone.regex'    => 'Please provide  a valid phone number',
                'phone.size'     => 'Phone Number must 11 character',
            ]);

            $user = User::create([
                'role' => 'seekers',
                'phone' => $request->phone,
            ]);
            Auth::login($user);
            $request->session()->regenerate();
            sendOtpUser($user->phone);
            return redirect()->route('seeker.verification');
        }
    }






    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toast('Successfully Logout !', 'success');
        return redirect('/');
    }
}
