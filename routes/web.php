<?php

use App\Http\Controllers\Auth\AdminLoginController;

use App\Http\Livewire\frontend\AllSectors;
use App\Http\Livewire\frontend\Career;
use App\Http\Livewire\frontend\Career\CareerApply;
use App\Http\Livewire\frontend\Career\CareerPage;
use App\Http\Livewire\frontend\Contacts;
use App\Http\Livewire\frontend\Home;
use App\Http\Livewire\frontend\Innovation;
use App\Http\Livewire\frontend\InnovationSubmit;
use App\Http\Livewire\frontend\Pages;
use App\Http\Livewire\frontend\Profile;
use App\Http\Livewire\frontend\Projects;
use App\Http\Livewire\frontend\Projects\ProjectPage;
use App\Http\Livewire\frontend\Sectors;
use App\Http\Livewire\frontend\Services;
use App\Http\Livewire\frontend\Vendor;
use App\Http\Livewire\frontend\Vendor\VendorPage;
use App\Models\awards\Award;
use App\Models\Histories\History;
use App\Models\staffs\Staff;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('setuser', function () {
    \App\Models\Admin::create([
        'name' => 'soheyl',
        'lastname' => 'delshad',
        'email' => 'admin@tsa.com',
        'password' => '123456',
        'is_admin' => true,
    ]);
});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', Home::class)->name('home');

    Route::group(['prefix' => 'who-we-are'], function () {

        /*Route::get('/{page}', pages::class)->name('page');*/

        Route::get('/at-a-glance', function () {
            return view('pages.glance');
        })->name('glance');

        Route::get('/history', function () {
            $history = History::where('status', 1)->get();
            
            $years = History::where('status', 1)->distinct('year')->orderBy('year')->get('year');
            return view('pages.history', compact(['history', 'years']));
        })->name('history');

        Route::get('/leadership', function () {

            $staffs = Staff::all();

            return view('pages.leadership', compact('staffs'));
        })->name('leadership');
        Route::view('/governance', 'pages.governance')->name('governance');

        Route::group(['prefix' => 'csr'], function () {
            Route::view('/', 'pages.csr')->name('csr');
            Route::view('/people', 'pages.people')->name('people');
            Route::view('/community', 'pages.community')->name('community');
            Route::view('/sustainability&environment', 'pages.sustainability')->name('sustainability');
        });

        Route::get('/certificates&awards', function () {
            $awards = Award::all();
            return view('pages.awards', compact('awards'));
        })->name('awards');
    });

    Route::group(['prefix' => 'what-we-do'], function () {
        Route::get('/services', Services::class)->name('services');
        Route::get('/innovation', Innovation::class)->name('innovation');
        Route::get('/projects', Projects::class)->name('project');
        Route::get('/projects/{project}', ProjectPage::class)->name('project-page');
        Route::get('/faq/{service}', [App\Http\Controllers\ServicesController::class, 'questioner'])->name('faq');
        Route::get('/sectors/', AllSectors::class)->name('allSector');
        Route::get('/sectors/{sector}', Sectors::class)->name('sector');
    });

    Route::get('/contacts', Contacts::class)->name('contacts');
    Route::get('/press', \App\Http\Livewire\frontend\Presses::class)->name('press');
    Route::get('/press/{press}', \App\Http\Livewire\frontend\Presses\PressPage::class)->name('press-page');
    Route::get('/vendor', Vendor::class)->name('vendor');
    Route::get('/vendor/{tender}', VendorPage::class)->name('tender-page');

    Route::group(['middleware' => 'auth:web'], function () {
        Route::get('/vendor/{tender}/apply/stepone', \App\Http\Livewire\frontend\Vendor\StepOne::class)->name('tender-step-one');
        Route::get('/vendor/apply/steptwo/{tenderApplication}', \App\Http\Livewire\frontend\Vendor\StepTwo::class)->name('tender-step-two');
        Route::get('/vendor/apply/stepthree/{tenderApplication}', \App\Http\Livewire\frontend\Vendor\Stepthree::class)->name('tender-step-three');

        Route::get('/profile', Profile::class)->name('profile');
        Route::get('/profile/innovation/{innovationApplication}/progress', \App\Http\Livewire\frontend\InnovationProgress::class)->name('progress');
        Route::get('/logout', function () {
            auth()->logout();
            return redirect()->to(route('home'));
        })->name('logout');
        Route::group(['prefix' => 'what-we-do'], function () {
            Route::get('/innovation/submit', InnovationSubmit::class)->name('innovationSubmit');
        });
    });

    Route::get('/login', \App\Http\Livewire\frontend\Login::class)->name('login');
    Route::get('/career', Career::class)->name('career');
    Route::get('/career/{career}', CareerPage::class)->name('career-page');
    Route::get('/career/{career}/apply', CareerApply::class)->name('career-apply');

});

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
