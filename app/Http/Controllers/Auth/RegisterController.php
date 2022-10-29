<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register()
    {
        return inertia('Auth/Register', [
            'url' => URL::route('register')
        ]);
    }


    public function store(Request $request)
    {

        $data = Request::validate([
            'name' => 'required',
            'phone' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'certificate' => 'required',
        ]);

        $url ="";

        if (\Illuminate\Support\Facades\Request::hasFile('certificate')) {
            $url = Request::file('certificate')->store('image', 'public');
        }
        $data['certificate'] = $url ?? null;

        $user = User::create($data);

        Auth::login($user);

        return redirect()->intended('dashboard');
    }
}
