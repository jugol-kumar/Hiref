<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Company;
use App\Models\Country;
use App\Models\Job;
use App\Models\Recruiter;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class RecruitersController extends Controller
{


    public function allJobs(){

        $jobs = Job::where('creator', Auth::id())->with('company')->get();

        return view('recruiters.jobs.index', compact('jobs'));
    }

    public function createJob(){
        return view( 'recruiters.jobs.create', with(
        ['categories' => Category::select('id', 'name')->get(),
            'countries' => Country::select('currency', 'currency_name', 'currency_symbol', 'id')->get(),

            'companies' => Company::with('photos')->get(),
            ]));

//        'sub_categories' => SubCategory::query()
//            ->when(\Illuminate\Support\Facades\Request::input('category_id'), function ($query, $category_id) {
//                $query->where('category_id', $category_id);
//            })
//            ->select('id', 'name', 'category_id')->get(),
//            'child_categories' => ChildCategory::query()
//            ->when(Request::input('sub_category_id'), function ($query, $sub_category_id) {
//                $query->where('sub_category_id', $sub_category_id);
//            })->select('id', 'name', 'sub_category_id')->get(),
    }

    public function getSubCat($id){
        $sub_categories = SubCategory::where('category_id', $id)->get();
        return response()->json(['data' => $sub_categories], 200);
    }
    public function getChildCat($id){
        $sub_categories = ChildCategory::where('sub_category_id', $id)->get();
        return response()->json(['data' => $sub_categories], 200);
    }




}
