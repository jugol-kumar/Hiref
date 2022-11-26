<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;


class RecruitersProfileController extends Controller
{
    public function editProfile()
    {
        return view('recruiters.profile.edit_profile');
    }
}
