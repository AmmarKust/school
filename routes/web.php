<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\TinyMceController;
use App\Http\Controllers\FilerController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\SeekersController;



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

Route::get('/', function () {
    return view('welcome');
});


Route::post('ckeditor/upload',[CKEditorController::class, 'upload'])->name('ckeditor.image-upload');

Route::post('profile/upload',[CKEditorController::class, 'profile'])->name('profile.image-upload');

Route::post('tinymce-image_upload-front',[TinyMceController::class, 'uploadImage'])->name('tinymce.image_upload.front');


Route::post('ajax_upload_file',[FilerController::class, 'upload'])->name('filer.image-upload');
Route::post('ajax_remove_file',[FilerController::class, 'fileDestroy'])->name('filer.image-remove');

/*Jobs Start*/

Route::get('jobs',[JobsController::class, 'index'])->name('jobs.list');
Route::get('job/{slug}',[JobsController::class, 'detail'])->name('jobs.detail');
/*End Jobs*/

//Testimonials
Route::get('testimonials',[TestimonialsController::class, 'index'])->name('testimonials.list');
//end of testimonials



/*Classes Start*/

Route::get('classes',[ClassesController::class, 'index'])->name('classes.list');
Route::get('class/{slug}',[ClassesController::class, 'detail'])->name('classes.detail');

Route::get('testimonials',[TestimonialsController::class, 'index'])->name('testimonials.list');

/*End Classes*/

/*Teachers Start*/
Route::get('teachers',[TeachersController::class, 'index'])->name('teachers.list');
Route::get('teacher/{slug}',[TeachersController::class, 'detail'])->name('teachers.detail');

/*End Teachers*/

//OurTeam
Route::get('ourteams',[OurTeamController::class, 'index'])->name('ourteams.list');
//end of ourteam

Route::get('update-professional-informations',[SeekersController::class, 'show'])->name('seeker.update');
Route::post('update-professional-informations',[SeekersController::class, 'store'])->name('seeker.update.informations');
Route::get('apply-now/{id}',[SeekersController::class, 'apply'])->name('seeker.apply-now');
Route::get('appllied-jobs',[SeekersController::class, 'applliedJobs'])->name('seeker.appllied-jobs');
Route::get('download-resume/{id}',[SeekersController::class, 'seeker'])->name('seeker.download-resume');





/*Blogs Start*/
Route::get('blog',[BlogsController::class, 'index'])->name('blogs.list');
Route::get('blog/{slug}',[BlogsController::class, 'detail'])->name('blogs.detail');

/*End Blogs*/

/*Contact Us Start*/
Route::get('contact-us',[ContactusController::class, 'index'])->name('contact.index');
Route::post('contact-us',[ContactusController::class, 'store'])->name('contact.post');

Route::post('news-letter',[NewsLetterController::class, 'store'])->name('newsletter.post');

Route::get('/clear-cache', function () {

  $exitCode = Artisan::call('config:clear');

  $exitCode = Artisan::call('cache:clear');

  $exitCode = Artisan::call('config:cache');

  return 'DONE'; //Return anything

});

/*End Contact Us*/
Route::get('/import',[CmsController::class, 'import'])->name('cms.import');
Route::get('/filter-states',[CmsController::class, 'filterStates'])->name('filter-states');
Route::get('/filter-cities',[CmsController::class, 'filterCities'])->name('filter-cities');
Route::get('/{slug}',[CmsController::class, 'index'])->name('cms.page');
