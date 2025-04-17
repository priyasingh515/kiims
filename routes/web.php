<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/captcha', [AdminController::class, 'generateCaptcha']);

Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware'=>'admin.guest'],function(){

        Route::get('/login', [AdminController::class, 'login'])->name('admin.login');

        Route::post('/authenticate',[AdminController::class,'authenticate'])->name('admin.authenticate');

    });

    Route::group(['middleware'=>'admin.auth'],function(){

        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/enquiry', [AdminController::class, 'enquiry'])->name('admin.enquiry');
        Route::get('/student_list', [AdminController::class, 'user_list'])->name('admin.userList');
        Route::get('/student_list_delete/{id}', [AdminController::class, 'registerUserdlt'])->name('admin.UserDlt');
        Route::post('/admin/update-status', [AdminController::class, 'updateStatus'])->name('admin.status.update');
        Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');


    });
});




Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/register', [HomeController::class, 'register']);
Route::get('/allCourse', [HomeController::class, 'allCourse']);
Route::get('/ot', [HomeController::class, 'ot']);
Route::get('/opthemic', [HomeController::class, 'opthemic']);
Route::get('/dmit', [HomeController::class, 'dmit']);
Route::get('/emt', [HomeController::class, 'emt']);
Route::get('/ctMR', [HomeController::class, 'ctmr']);
Route::get('/dresser', [HomeController::class, 'dresser']);
Route::post('/register-user', [HomeController::class, 'registerStore'])->name('register.user');
Route::post('/enquiry', [HomeController::class, 'enquiry'])->name('enquiry.user');
Route::get('/verify', [HomeController::class, 'verify'])->name('verify.user');

Route::get('/admin/search-by-enrollment', [HomeController::class, 'searchByEnrollment'])->name('admin.searchByEnrollment');

