<?php

use App\Http\Controllers\Admin\CareerApplicantController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\FolderController;
use App\Http\Controllers\Admin\InnovationApplicationController;
use App\Http\Controllers\Admin\InnovationController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PressController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\QuicklinkController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TenderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Livewire\backend\MainPage;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return redirect(route('admin.dashboard'));
});

Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

Route::post('/uploadingFile', [FileController::class, 'uploadingFile'])->name('uploadingFile');

Route::post('files/upload', [FileController::class, 'fileUpload'])->name('file_upload');
Route::post('projects/delete_image', [ProjectController::class, 'deleteImage'])->name('delete_project_image');
Route::post('press/delete_image', [PressController::class, 'deleteImage'])->name('delete_press_image');
Route::get('Folders/get_folder', [FolderController::class, 'getFolders'])->name('get_folder');
Route::post('Folders/create-folder', [FolderController::class, 'createFolder'])->name('create_folder');
Route::post('Folders/delete-folder', [FolderController::class, 'deleteFolder'])->name('delete_folder');
Route::get('career-applicants/download/{id}', [CareerApplicantController::class, 'download'])->name('download-resume');
Route::get('tender-applications/download', [\App\Http\Controllers\Admin\TenderApplicationController::class, 'download'])->name('vendor_document_download');

Route::get('/main-page', MainPage::class)->name('mainPage.index');

Route::resources([
    'roles' => RoleController::class,
    'permissions' => PermissionController::class,
    'users' => UserController::class,
    'languages' => LanguageController::class,
    'menus' => MenuController::class,
    'faqs' => FaqController::class,
    'sectors' => SectorController::class,
    'slides' => SliderController::class,
    'folders' => FolderController::class,
    'services' => ServicesController::class,
    'projects' => ProjectController::class,
    'presses' => PressController::class,
    'contacts' => ContactController::class,
    'tenders' => TenderController::class,
    'tender-applications'=> \App\Http\Controllers\Admin\TenderApplicationController::class  ,
    'careers' => CareerController::class,
    'career-applicants' => CareerApplicantController::class,
    'pages' => PageController::class,
    'quicklinks' => QuicklinkController::class,
    'innovations' => InnovationController::class,
    'innovation-applications' => InnovationApplicationController::class,
    'histories' => \App\Http\Controllers\Admin\HistoryController::class,
    'staffs' => \App\Http\Controllers\Admin\StaffController::class,
    'awards' => \App\Http\Controllers\Admin\AwardController::class,
]);

Route::post('/logout', [AdminLoginController::class,'logout'])->name('logout');

