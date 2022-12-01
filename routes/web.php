<?php
use Illuminate\Support\Facades\Route;
//memanggil file controller
use App\Http\Controllers\HomeController;
//route sebelumnya
// Route::get('/', function () {
// return view('frontpage.landingpage');
// });
//route yang terbaru
Route::get('/', [HomeController::class, 'index']);
Route::get('/order', [HomeController::class, 'order']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/store', [HomeController::class, 'store']);
Route::get('/shopp', function () {
    return view('shopp');
   })->middleware(['auth'])->name('shopp');
   require __DIR__.'/auth.php';
