<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ajaxController;
use App\Http\Controllers\demoController;
use App\Http\Controllers\customAuthController;
use App\Http\Controllers\relationshipController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SendmailController;
use App\Http\Controllers\ExportController;



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


// Route::post("/ajaxDataInsert",[ajaxController::class,"insertdata"]);
// Route::get("/indexdata",[ajaxController::class,"ajaxtable"]);
// Route::get("/index",[ajaxController::class,"ajaxindex"]);
// Route::get("/showdatas",[ajaxController::class,"showdata"]);
// Route::get("/listingdatas",[ajaxController::class,"listingdata"]);
// Route::get("/editdatas",[ajaxController::class,"editdata"]);

// Route::get("demo",[demoController::class,"demouser"]);

// Route::get('login',[customAuthController::class,'login'])->middleware('alreadyLoggedIn');
// Route::get('registration',[customAuthController::class,'registration'])->middleware('alreadyLoggedIn');
// Route::post('register-user',[customAuthController::class,'registerUser'])->name('register-user');
// Route::post('login-user',[customAuthController::class,'loginUser'])->name('login-user');
// Route::get('dashbord',[customAuthController::class,'dashbord'])->middleware('isLoggedIn');
// Route::get('logout',[customAuthController::class,'logout']); 


Route::get('relation',[relationshipController::class,'relationTest']);
// Route::get('index',[TestController::class,'index']);
// Route::get('insertForm',[TestController::class,'insertForm'])->name('insertForm');
// Route::post('insertDatas',[TestController::class,'insertData'])->name('insertDatas');
// Route::get('clsssForm/{id}',[TestController::class,'clsssForm'])->name('clsssForm');
// Route::post('clsssData',[TestController::class,'clsssData'])->name('clsssData');

// Route::get('mailForm',[SendmailController::class,'mailForm']);
// Route::post('emailSend',[SendmailController::class,'sendEmail'])->name('sendEmail');


// Route::get('exportImport',[ExportController::class,'exportImport']);
// Route::get('export',[ExportController::class,'export'])->name('export');
// Route::post('import',[ExportController::class,'import'])->name('import');

