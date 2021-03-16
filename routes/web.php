<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Mail\UserContactUsMail;
use Illuminate\Support\Facades\Auth;


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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [MainController::class, 'index']);

Route::get('/contacts', [MailController::class, 'contacts']);
Route::post('/send-email', [MailController::class, 'send']);


Auth::routes();

// Route::middleware(['auth'])->prefix('admin')->group(function(){
//Route::get('/admin', [AdminController::class, 'index']);
//Route::resource('admin/user', [UserController::class, 'index']);
// });


// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });



