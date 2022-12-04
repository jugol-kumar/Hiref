<?php

use App\Http\Controllers\BusinessSettingController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RecruitersCompanyController;
use App\Http\Controllers\RecruitersController;
use App\Http\Controllers\RecruitersProfileController;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\SeekerProfileController;
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
    Route::get('seekers', 'seekers')->name('seekers');
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

    Route::get('seekers/register', [RegisterController::class, 'seekerRegister'])->name('seeker.register');
    Route::post('seeker/create', [RegisterController::class, 'registerSeeker'])->name('registerSeeker');

    Route::post('seeker/login/or/create', [LoginController::class, 'seekerLogin'])->name('seekerLogin');


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

        Route::prefix('recruiters')->name('recruiter.')->middleware('recruiters')->group(function(){
            Route::get('dashboard', [DashboardController::class, 'recruiters'])->name('dashboard');

            Route::get('jobs/jobs', [RecruitersController::class, 'allJobs'])->name('allJobs');
            Route::get('jobs/create-job', [RecruitersController::class, 'createJob'])->name('createJob');
            Route::post('jobs/post-new-job', [RecruitersController::class, 'storeJob'])->name('storeJob');
            Route::delete('jobs/delete-job/{id}', [RecruitersController::class, 'deleteJob'])->name('deleteJob');
            Route::get('jobs/edit-single-job/{job_slug}', [RecruitersController::class, 'editJob'])->name('editJob');
            Route::put('jobs/update-single-job/{id}', [RecruitersController::class, 'updateJob'])->name('updateJob');

            Route::get('sub-category/by-category-id/{id}', [RecruitersController::class, 'getSubCat'])->name('getSubCat');
            Route::get('child-category/by-sub-category-id/{id}', [RecruitersController::class, 'getChildCat'])->name('getChildCat');

            Route::get('company/my-all-companies', [RecruitersCompanyController::class, 'allCompanies'])->name('allCompanies');
            Route::post('company/save-new-companies', [RecruitersCompanyController::class, 'saveCompany'])->name('saveCompany');
            Route::delete('company/delete-single-companies/{id}', [RecruitersCompanyController::class, 'deleteCompany'])->name('deleteCompany');


            Route::post('change-profile-picture', [RecruitersProfileController::class, 'changeProfilePicture'])->name('changeProfilePicture');
            Route::post('update-profile-information', [RecruitersProfileController::class, 'editPersonalInfo'])->name('editPersonalInfo');
            Route::get('edit-profile', [RecruitersProfileController::class, 'editProfile'])->name('editProfile');

            Route::get('security-page', [RecruitersProfileController::class, 'security'])->name('security');
            Route::post('update-email', [RecruitersProfileController::class, 'updateEmail'])->name('changeEmail');
            Route::post('update-security-password', [RecruitersProfileController::class, 'changePassword'])->name('changePass');

            Route::view('social-media-url-profile', 'recruiters.profile.socal_profile')->name('socialProfile');
            Route::post('update-social-profile', [RecruitersProfileController::class, 'updateSocialLinks'])->name('updateSocialLinks');
        });

        Route::prefix('seekers')->name('seeker.')->middleware('seekers')->group(function (){
            // otp verification and profile complete for job seeker
            Route::withoutMiddleware('seekers')->group(function (){
                Route::get('verification', [SeekerController::class, 'verification'])->name('verification');
                Route::post('verification-otp', [SeekerController::class, 'verificationCheckOtp'])->name('verificationOtp');
                Route::get('resend-verification-code', [SeekerController::class, 'resVCode'])->name('resVCode');

                Route::get('second-step', [SeekerController::class, 'firstStep'])->name('firstStep');

                Route::get('get-sub-categories/{id}', [SeekerController::class, 'subCatById'])->name('getSubCat');
                Route::get('get-cities-by-state-id/{id}', [SeekerController::class, 'getCities'])->name('getCities');
                Route::get('get-upozila-by-district-id/{id}', [SeekerController::class, 'getUpozelaByDid'])->name('getupozela');

                // educations
                Route::get('get-educations-by-educations-label/{id}', [SeekerController::class, 'getEducations'])->name('getEducations');

                // first stape data save
                Route::post('data-save-first-step', [SeekerController::class, 'firstStapeSave'])->name('firstStapeSave');
                Route::post('data-save-second-step', [SeekerController::class, 'secondStapeSave'])->name('secondStapeSave');
                Route::post('data-save-third-step', [SeekerController::class, 'thirdStapeSave'])->name('thirdStapeSave');
                Route::post('data-save-last-step', [SeekerController::class, 'lastFormSave'])->name('lastFormSave');

                // profile review and goto dashboard
                Route::get('profile-review', [SeekerController::class, 'profileReview'])->name('profileReview');
                Route::post('update-seeker-profile-bio', [SeekerController::class, 'updateBio'])->name('updateBio');

                // sekker inactive
                Route::get('profile-inactive', [SeekerController::class, 'profileInactiveShow'])->name('profileInactive');
            });


            Route::get('dashboard', [SeekerController::class, 'dashboard'])->name('dashboard');

            Route::post('change-profile-picture', [SeekerProfileController::class, 'changeProfilePicture'])->name('changeProfilePicture');
            Route::post('update-profile-information', [SeekerProfileController::class, 'editPersonalInfo'])->name('editPersonalInfo');
            Route::get('edit-profile', [SeekerProfileController::class, 'editProfile'])->name('editProfile');

            Route::get('security-page', [SeekerProfileController::class, 'security'])->name('security');
            Route::post('update-email', [SeekerProfileController::class, 'updateEmail'])->name('changeEmail');
            Route::post('update-security-password', [SeekerProfileController::class, 'changePassword'])->name('changePass');

            Route::view('social-media-url-profile', 'seekers.profile.socal_profile')->name('socialProfile');
            Route::post('update-social-profile', [SeekerProfileController::class, 'updateSocialLinks'])->name('updateSocialLinks');
        });
    });
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/test', function (){
    return view('frontend.test_vue');
});
