<?php

use Illuminate\Support\Facades\Route;
use Sontus\Contactform\Http\Controllers\ContactFormController;


Route::group(['middleware' => ['web','guest']], function () {
    Route::get('/contact', [ContactFormController::class,'create'])->name('contact');
    Route::post('/submit-message',  [ContactFormController::class,'store'])->name('submit-message');
});
