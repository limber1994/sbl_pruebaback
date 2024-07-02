<?php
// routes/api.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\BookController;
//CONFGURACIONES
Route::get('/sbl_config', [ConfigController::class, 'index']);
Route::put('/sbl_config/{id}', [ConfigController::class, 'update']);
Route::delete('/sbl_config/{id}', [ConfigController::class, 'destroy']);
//LIBROS
Route::get('books', [BookController::class, 'index']);
Route::get('books/{id}', [BookController::class, 'show']);
Route::post('books', [BookController::class, 'store']);
Route::put('books/{id}', [BookController::class, 'update']);
Route::delete('books/{id}', [BookController::class, 'destroy']);
Route::get('books/grade/{grade}', [BookController::class, 'getBooksByGrade']);