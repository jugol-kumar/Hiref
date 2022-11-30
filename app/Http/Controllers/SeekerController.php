<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeekerController extends Controller
{
    public function dashboard(){
        return view('seekers.dashboard');
    }

    public function verification(){

        return view('seekers.auth.verification');
    }

    public function verificationCheckOtp(Request $request){
        return $request;
    }


}
