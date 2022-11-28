<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Company;
use App\Models\Country;
use App\Models\Job;
use App\Models\Recruiter;
use App\Models\Skill;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use RealRashid\SweetAlert\Facades\Alert;

class RecruitersController extends Controller
{


    public function allJobs(){

        $jobs = Job::where('creator', Auth::id())->with(['company', 'category'])->paginate(10);

        return view('recruiters.jobs.index', compact('jobs'));
    }

    public function createJob(){

        return view( 'recruiters.jobs.create', with(
        ['categories' => Category::select('id', 'name')->get(),
            'countries' => Country::select('currency', 'currency_name', 'currency_symbol', 'name', 'id')->get(),

            'companies' => Company::where('user_id', Auth::id())->with('photos')->get(),

            ]));
    }

    public function getSubCat($id){
        $sub_categories = SubCategory::where('category_id', $id)->get();
        return response()->json(['data' => $sub_categories], 200);
    }

    public function getChildCat($id){
        $sub_categories = ChildCategory::where('sub_category_id', $id)->get();
        return response()->json(['data' => $sub_categories], 200);
    }



    public function storeJob(Request $request){

        $data = \Illuminate\Support\Facades\Request::validate([
            "title" => 'required',
            "types" => 'required',
            "label" =>  'required',
            "category_id" => 'nullable|integer',
            "sub_category_id" =>  'nullable|integer',
            "child_category_id" => 'nullable|integer',
            "currency" => 'required|integer',
            "min_salary" => 'required|integer',
            "max_salary" => 'required|integer',
            "min_experience" => 'required|integer',
            'max_experience' => 'required|integer',
            'experience_type'=> 'required',
            "company" =>'required|integer',
            "creator" => 'nullable|integer',
            "declined_date" => 'required',
            "web_address" => 'required|url',
            "location" => 'nullable|string',
            "job_details" => 'required|min:200'
//            "is_remote" => 'boolean',
//            "fultime_remote" => 'boolean',
//            "is_published" => 'boolean',
//            "is_featured" => 'boolean',
//            "tags" => 'nullable|array',
//            "skills" => 'nullable|array',
        ]);


        $skills =  array_map(function ($item){
            return $item->value;
        } ,json_decode($request->skills));

        $tags =  array_map(function ($item){
            return $item->value;
        } ,json_decode($request->tags));


        $data["tags"] = json_encode($tags);
        $data["skills"] = json_encode($skills);
        $data['creator'] = Auth::id();
        $data['is_remote'] = filled($request->is_remote);
        $data['fultime_remote'] = filled($request->fultime_remote);
        $data['is_published'] = filled($request->is_published);
        $data['is_featured'] = filled($request->is_featured);


        $data['user_id'] = Auth::id();
        foreach ($tags as $value){
            Tag::updateOrCreate([
                'name' => $value
            ]);
        }
        foreach ($skills as $value){
            Skill::updateOrCreate([
                'name' => $value
            ]);
        }

        Job::create($data);

        toast('Successfully created Job', 'success');
        return redirect()->route('recruiter.allJobs');


    }

    public function editJob($slug){
        $job = Job::where('slug', $slug)->with(['company', 'category'])->first();
        $categories = Category::select('id', 'name')->get();
        $subCategories = SubCategory::select('id', 'name')->get();
        $cCategories = ChildCategory::select('id', 'name')->get();

        $countries = Country::select('currency', 'currency_name', 'currency_symbol', 'name', 'id')->get();
        $companies = Company::with('photos')->get();

        return view('recruiters.jobs.edit', compact('job', 'categories', 'countries', 'companies', 'subCategories', 'cCategories'));
    }

    public function updateJob(Request $request, $id){
        $job = Job::findOrFail($id);

        $data = \Illuminate\Support\Facades\Request::validate([
            "title" => 'required',
            "types" => 'required',
            "label" =>  'required',
            "category_id" => 'nullable|integer',
            "sub_category_id" =>  'nullable|integer',
            "child_category_id" => 'nullable|integer',
            "currency" => 'required|integer',
            "min_salary" => 'required|integer',
            "max_salary" => 'required|integer',
            "min_experience" => 'required|integer',
            'max_experience' => 'required|integer',
            'experience_type'=> 'required',
            "company" =>'required|integer',
            "creator" => 'nullable|integer',
            "declined_date" => 'required',
            "web_address" => 'required|url',
            "location" => 'nullable|string',
            "job_details" => 'required|min:200'
//            "is_remote" => 'boolean',
//            "fultime_remote" => 'boolean',
//            "is_published" => 'boolean',
//            "is_featured" => 'boolean',
//            "tags" => 'nullable|array',
//            "skills" => 'nullable|array',
        ]);


        $skills =  array_map(function ($item){
            return $item->value;
        } ,json_decode($request->skills));

        $tags =  array_map(function ($item){
            return $item->value;
        } ,json_decode($request->tags));



        $data["tags"] = json_encode($tags);
        $data["skills"] = json_encode($skills);
        $data['creator'] = Auth::id();
        $data['is_remote'] = filled($request->is_remote);
        $data['fultime_remote'] = filled($request->fultime_remote);
        $data['is_published'] = filled($request->is_published);
        $data['is_featured'] = filled($request->is_featured);


        $data['user_id'] = Auth::id();
        foreach ($tags as $value){
            Tag::updateOrCreate([
                'name' => $value
            ]);
        }
        foreach ($skills as $value){
            Skill::updateOrCreate([
                'name' => $value
            ]);
        }

        $job->update($data);

        toast('Successfully update job', 'success');
        return redirect()->route('recruiter.allJobs');
    }



    public function deleteJob($id){

        Job::findOrFail($id)->delete();
        toast('Successfully delete job', 'success');
        return redirect()->route('recruiter.allJobs');

    }

}
