<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
    PengajuanKtpController,
    KehilanganKtpController,
};

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


Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('ajayydavex@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');
        
        
        Route::get('/setting/pengajuanktp',[PengajuanKtpController::class,'index'])->name('pengajuan.index');
        Route::put('/pengajuanktp',[PengajuanKtpController::class,'update'])->name('pengajuan.update');
        Route::get('/pengajuanktp/{id}/edit', [PengajuanKtpController::class, 'edit'])->name('pengajuan.edit');
        Route::get('/pengajuanktp/create', [PengajuanKtpController::class, 'create'])->name('pengajuan.create');
        Route::get('/pengajuanktp/{id}/show', [PengajuanKtpController::class, 'show'])->name('pengajuan.show');
        Route::delete('/pengajuanktp/{id}', [PengajuanKtpController::class, 'destroy'])->name('pengajuan.destroy');
        Route::post('/pengajuanktp', [PengajuanKtpController::class, 'store'])->name('pengajuan.store');

        Route::post('pengajuan/{id}/complete', 'PengajuanKtpController@markAsCompleted')
            ->name('pengajuan.complete');
            
        Route::post('pengajuan/{id}/reject', 'PengajuanKtpController@markAsRejected')
            ->name('pengajuan.reject');

        Route::get('/setting/kehilanganktp',[KehilanganKtpController::class,'index'])->name('kehilangan.index');
        Route::put('/kehilanganktp',[KehilanganKtpController::class,'update'])->name('kehilangan.update');
        Route::get('/kehilanganktp/{id}/edit', [KehilanganKtpController::class, 'edit'])->name('kehilangan.edit');
        Route::get('/kehilanganktp/create', [KehilanganKtpController::class, 'create'])->name('kehilangan.create');
        Route::get('/kehilanganktp/{id}/show', [KehilanganKtpController::class, 'show'])->name('kehilangan.show');
        Route::delete('/kehilanganktp/{id}', [KehilanganKtpController::class, 'destroy'])->name('kehilangan.destroy');
        Route::post('/kehilanganktp', [KehilanganKtpController::class, 'store'])->name('kehilangan.store');

        Route::post('kehilangan/{id}/complete', 'KehilanganKtpController@markAsCompleted')
            ->name('kehilangan.complete');
            
        Route::post('kehilangan/{id}/reject', 'KehilanganKtpController@markAsRejected')
            ->name('kehilangan.reject');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});
