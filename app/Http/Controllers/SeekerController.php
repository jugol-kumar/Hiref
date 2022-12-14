<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\Division;
use App\Models\Education;
use App\Models\EducationLabel;
use App\Models\SeekerProfile;
use App\Models\State;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class SeekerController extends Controller
{
    public function dashboard(){
        return view('seekers.dashboard');
    }

    public function verification(){

        return view('seekers.auth.verification');
    }

    public function verificationCheckOtp(Request $request){
        $request->validate([
            'otp.*' => 'required'
        ],[
            'otp.*.required' => "Please Fill-Up OTP Form With Valid OTP Code"
        ]);

        $otp = trim(implode("", $request->input("otp")));
        $user = Auth::user();
        if ($otp){
            if($user->sms_otp != null && $user->sms_otp == $otp){
                $user->update([
                    'sms_otp' => null,
                    'is_verified' => true,
                    'email_verified_at' => now()
                ]);
                toast('Your Phone Number Is Verified Now.', 'success');
                return redirect()->route('seeker.firstStep');
            }else{
                toast('OTP Code is invalid, Try Again', 'error');
                return back();
            }
        }else{
            toast('Please provide valid OTP code', 'error');
            return back();
        }
    }

    public function resVCode(){
        $phone = base64_decode(\request()->input('phone'));
        sendOtpUser($phone);
        toast('Again Sms Send Successfully Done....', 'success');
        return back();
    }

    public function firstStep(){
        $states =  Division::all();
        $categories = Category::all();
        $degrees = EducationLabel::all();

        return view('seekers.stapes.personal_details', compact('states', 'categories', 'degrees'));
    }

    public function subCatById($id){
        return SubCategory::where('category_id', $id)->with('child_categories')->get();
    }
    public function getCities($id){
        return Division::findOrFail($id)->load('districts');
    }
    public function getUpozelaByDid($id){
        return District::findOrFail($id)->load('upozilas');
    }
    public function getEducations($id){
        return Education::where('education_label_id', $id)->get();
    }

    public function firstStapeSave(Request $request): bool
    {

        $request->validate([
            'types' => 'required',
            'category_id' => 'required|integer',
            'subcategories' => 'required',
            'division' => 'required',
            'district' => 'required',
            'upozillas' => 'required',
            'exp_min_sal' => 'required',
            'exp_max_sal' => 'required'
        ]);

        $user = SeekerProfile::where('user_id', Auth::id())->first();

        if ($user){
            $user->update([
                'user_id' => Auth::id(),
                'types' => $request->types,
                'category_id' => $request->category_id,
                'subcategories' => json_encode($request->subcategories),
                'division_id' => $request->division,
                'district_id' => $request->district,
                'upozillas' => json_encode($request->upozillas),
                'exp_min_sal' => $request->exp_min_sal,
                'exp_max_sal' => $request->exp_max_sal
            ]);
        } else{
            SeekerProfile::create([
                'user_id' => Auth::id(),
                'types' => $request->types,
                'category_id' => $request->category_id,
                'subcategories' => json_encode($request->subcategories),
                'division_id' => $request->division,
                'district_id' => $request->district,
                'upozillas' => json_encode($request->upozillas),
                'exp_min_sal' => $request->exp_min_sal,
                'exp_max_sal' => $request->exp_max_sal
            ]);
        }

        return true;
    }

    public function secondStapeSave(Request $request): bool
    {
        $user = Auth::user();
        $seeker = SeekerProfile::where('user_id', Auth::id())->first();

        if ($request->hasFile('profile_pic')){
            $file = $request->file('profile_pic')->store('user', 'public');
            $user->photo = $file;
            $user->update();
        }

        $seeker->declined_date = $request->declined_date;
        $seeker->experience = $request->experience;
        $seeker->gender = $request->gender;
        $seeker->update();
        return true;
    }

    public function thirdStapeSave(Request $request): bool
    {
        $seeker = SeekerProfile::where('user_id', Auth::id())->first();
        $seeker->start_date = $request->start_date;
        $seeker->end_date = $request->end_date;
        $seeker->company_name = $request->company_name;
        $seeker->designation = $request->designation;
        $seeker->update();
        return true;
    }

    public function lastFormSave(Request $request){
        $seeker = SeekerProfile::where('user_id', Auth::id())->first();
        $seeker->education_id = $request->degree_label;
        $seeker->education_label_id = $request->degree_id;
        $seeker->uni_end_date = $request->uni_end_date;
        $seeker->uni_start_date = $request->uni_start_date;
        $seeker->university  = $request->university;
        $seeker->update();
        return response()->json([
            'status' => 200,
            'url' => URL::route('seeker.profileReview')
        ]);
    }

    public function profileReview(){
        $districts = District::all()->load('upozilas');
        return view('seekers.stapes.profile_bio', compact('districts'));
    }

    public function updateBio(Request $request){

        $request->validate([
           'first_name' => 'required',
           'last_name'  => 'required',
            'email'     => 'required',
            'full_address' => 'required',
            'about_bio' => 'required|max:1000',
            'resume' => 'required',
            'division' => 'required|integer',
        ]);

        $user = Auth::user();
        $seeker = SeekerProfile::where('user_id', Auth::id())->first();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name. " " . $request->last_name;
        $user->email = $request->email;
        $user->address = $request->full_address;
        $user->city_id = $request->division;
        $user->about = $request->about_bio;
        $user->update();

        if ($request->hasFile('resume')){
            $file = $request->file('resume')->store('user', 'public');
            $seeker->resume = $file;
            $seeker->update();
        }
        return response()->json([
            'status' => 200,
            'url' => URL::route('seeker.dashboard')
        ]);
    }

    public function profileInactiveShow(){
        return view('seekers.stapes.profile_inactive');
    }


}
