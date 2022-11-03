<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\Job;
use App\Models\SubCategory;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function index()
    {
        return inertia('Backend/Jobs/Jobs', [
            'companies' => Job::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(Request::input('perPage') ?? 10)
                ->withQueryString()
                ->through(fn($job) => [
                    'id' => $job->id,
                    'title' => $job->title
                ]),
            'cities' => City::where('country_id', 19)->select('id','name')->get(),
            'filters' => Request::only(['search','perPage']),
            'url' => URL::route('companies.index')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return inertia('Backend/Jobs/CreateNew', [

            'categories' => Category::select('id', 'name')->get(),
            'sub_categories' => SubCategory::query()
                ->when(Request::input('category_id'), function ($query, $category_id) {
                    $query->where('category_id', $category_id);
                })
                ->select('id', 'name', 'category_id')->get(),
            'child_categories' => ChildCategory::query()
                ->when(Request::input('sub_category_id'), function ($query, $sub_category_id) {
                    $query->where('sub_category_id', $sub_category_id);
                })->select('id', 'name', 'sub_category_id')->get(),
            'countries' => Country::select('currency', 'currency_name', 'currency_symbol', 'id')->get(),

            'companies' => Company::with('photos')->get(),

            'subbycat_url' => URL::route('subbycat'),
            'childbysubcat_url' => URL::route('childbysubcat'),
            // 'can' => [
            //     'createUser' => Auth::user()->can('create', User::class)
            // ]
        ]);
    }


    public function allSubcategory()
    {

        return SubCategory::where('category_id', Request::input('category'))->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
