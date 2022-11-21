<?php

use App\Http\Controllers\BusinessSettingController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RecruitersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MocktestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PayPalPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(HomeController::class)->name('client.')->group(function (){
    Route::get('', 'home')->name('home');
    Route::get('single-job/{job_title_slug}', 'singleJob')->name('single_job');
    Route::get('recruiters', 'recruiter')->name('recruiter');
});

Route::controller(RecruitersController::class)->prefix('recruiters')->name('recruiter.')->group(function (){
    Route::post('create', 'create')->name('create');
});


//Route::get('/', [HomeController::class, 'home']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/checkout/{slug}', [HomeController::class, 'checkout']);
Route::get('/details/{slug}', [HomeController::class, 'details']);

Route::get('pay/paypal', [PayPalPaymentController::class, 'charge'])->middleware('auth')->name('paypal.pay');
Route::get('pay/success', [PayPalPaymentController::class, 'success'])->name('paypal.success');
Route::get('pay/error', [PayPalPaymentController::class, 'error'])->name('paypal.error');



Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('recruiter/register', [RegisterController::class, 'create'])->name('recruiter.create');
    Route::post('recruiter/login', [LoginController::class, 'authenticate'])->name('recruiter.login');
});
Route::any('logout', [LoginController::class, 'destroy'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::prefix('student')->middleware('is_student')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'student'])->name('dashboard');
    });

    Route::prefix('panel')->group(function () {
        Route::prefix('admin')->group(function(){
            Route::get('dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

            Route::resource('categories', CategoryController::class);
            Route::resource('sub_categories', SubCategoryController::class);
            Route::resource('child_categories', ChildCategoryController::class);

            Route::resource('companies', CompanyController::class);
            Route::post('companies/{id}/update', [CompanyController::class, 'updateCompany']);

            Route::resource('jobs', JobController::class);
            Route::post('child-categories-by-category-id', [JobController::class, 'allSubcategory'])->name('allSubCategory');

            Route::get('settings',  [BusinessSettingController::class, 'index'])->name('setting.index');
            Route::post('settings',  [BusinessSettingController::class, 'updateSetting'])->name('setting.update');
        });


        Route::prefix('recruiters')->name('recruiter.')->group(function(){
            Route::get('dashboard', [DashboardController::class, 'recruiters'])->name('dashboard');

            Route::get('jobs', [RecruitersController::class, 'allJobs'])->name('allJobs');
            Route::get('create-job', [RecruitersController::class, 'createJob'])->name('createJob');

            Route::get('sub-category/by-category-id/{id}', [RecruitersController::class, 'getSubCat'])->name('getSubCat');
            Route::get('child-category/by-sub-category-id/{id}', [RecruitersController::class, 'getChildCat'])->name('getChildCat');
        });
    });


});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/test', function (){
    return view('frontend.test_vue');
});
